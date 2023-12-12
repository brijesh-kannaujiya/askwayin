<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppaddsRequest;
use App\Models\Appadds;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AppaddsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
        $datas = Appadds::orderBy('id','desc');

        return Datatables::of($datas)
                            ->editColumn('created_at', function(Appadds $data){
                                return $data->created_at->format('d M,Y');
                            })
                            ->editColumn('photo', function(Appadds $data) {
                                $photo = $data->photo ? url('assets/images/'.$data->photo):url('assets/images/noimage.png');
                                return '<img src="' . $photo . '" alt="Image">';
                            })

                            ->addColumn('action', function(Appadds $data) {

                              return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.'Actions' .'
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.appadds.edit',$data->id) . '"  class="dropdown-item">'.__("Edit").'</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="'.  route('admin.appadds.delete',$data->id).'">'.__("Delete").'</a>
                                </div>
                              </div>';

                            })
                            ->rawColumns(['photo','action'])
                            ->toJson();
    }

    public function index(){
        return view('admin.appadds.index');
    }

    public function create()
    {
        return view('admin.appadds.create');
    }

    public function store(AppaddsRequest $request)
    {
        $data = new Appadds();
        $input = $request->all();

        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            $input['photo'] = $name;
        }
        
        if ($file = $request->file('appadds_img'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            $input['appadds_img'] = $name;
        }
        
        
        $data->fill($input)->save();

        $msg = 'New Data Added Successfully.'.'<a href="'.route("admin.appadds.index").'">View Lists</a>';
        return response()->json($msg);
    }

    public function edit($id)
    {
        $data = Appadds::findOrFail($id);
        return view('admin.appadds.edit',compact('data'));
    }

    public function update(AppaddsRequest $request, $id)
    {
        $data = Appadds::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            @unlink('assets/images/'.$data->photo);
            $input['photo'] = $name;
        }
        
        if ($file = $request->file('appadds_img'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            @unlink('assets/images/'.$data->appadds_img);
            $input['appadds_img'] = $name;
        }
        
        $data->update($input);

        $msg = 'Data Updated Successfully.'.'<a href="'.route("admin.appadds.index").'">View Lists</a>';
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $data = Appadds::findOrFail($id);
        @unlink('assets/images/'.$data->photo);
        $data->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }
}
