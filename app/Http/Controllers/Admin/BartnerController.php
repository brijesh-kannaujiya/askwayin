<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BartnerRequest;
use App\Models\Bartner;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
        $datas = Bartner::orderBy('id','desc');

        return Datatables::of($datas)
                            ->editColumn('created_at', function(Bartner $data){
                                return $data->created_at->format('d M,Y');
                            })
                            ->editColumn('photo', function(Bartner $data) {
                                $photo = $data->photo ? url('assets/images/'.$data->photo):url('assets/images/noimage.png');
                                return '<img src="' . $photo . '" alt="Image">';
                            })

                            ->addColumn('action', function(Bartner $data) {

                              return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.'Actions' .'
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.bartner.edit',$data->id) . '"  class="dropdown-item">'.__("Edit").'</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="'.  route('admin.bartner.delete',$data->id).'">'.__("Delete").'</a>
                                </div>
                              </div>';

                            })
                            ->rawColumns(['photo','action'])
                            ->toJson();
    }

    public function index(){
        return view('admin.bartners.index');
    }

    public function create()
    {
        return view('admin.bartners.create');
    }

    public function store(BartnerRequest $request)
    {
        $data = new Bartner();
        $input = $request->all();

        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            $input['photo'] = $name;
        }
        $data->fill($input)->save();

        $msg = 'New Data Added Successfully.'.'<a href="'.route("admin.bartner.index").'">View Lists</a>';
        return response()->json($msg);
    }

    public function edit($id)
    {
        $data = Bartner::findOrFail($id);
        return view('admin.bartners.edit',compact('data'));
    }

    public function update(BartnerRequest $request, $id)
    {
        $data = Bartner::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            @unlink('assets/images/'.$data->photo);
            $input['photo'] = $name;
        }
        $data->update($input);

        $msg = 'Data Updated Successfully.'.'<a href="'.route("admin.bartner.index").'">View Lists</a>';
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $data = Bartner::findOrFail($id);
        @unlink('assets/images/'.$data->photo);
        $data->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }
}
