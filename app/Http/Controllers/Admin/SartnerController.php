<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SartnerRequest;
use App\Models\Sartner;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
        $datas = Sartner::orderBy('id', 'desc');

        return Datatables::of($datas)
            ->editColumn('created_at', function (Sartner $data) {
                return $data->created_at->format('d M,Y');
            })
            ->editColumn('photo', function (Sartner $data) {
                $photo = $data->photo ? url('public/assets/images/' . $data->photo) : url('public/assets/images/noimage.png');
                return '<img src="' . $photo . '" alt="Image">';
            })

            ->addColumn('action', function (Sartner $data) {

                return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  ' . 'Actions' . '
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.sartner.edit', $data->id) . '"  class="dropdown-item">' . __("Edit") . '</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="' .  route('admin.sartner.delete', $data->id) . '">' . __("Delete") . '</a>
                                </div>
                              </div>';
            })
            ->rawColumns(['photo', 'action'])
            ->toJson();
    }

    public function index()
    {
        return view('admin.sartners.index');
    }

    public function create()
    {
        return view('admin.sartners.create');
    }

    public function store(SartnerRequest $request)
    {
        $data = new Sartner();
        $input = $request->all();

        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/assets/images', $name);
            $input['photo'] = $name;
        }

        // Assuming the 'title' and 'subtitle' fields are present in the 'sartners' table
        $input['title'] = $request->input('title');
        $input['subtitle'] = $request->input('subtitle');

        $data->fill($input)->save();

        $msg = 'New Data Added Successfully.' . '<a href="' . route("admin.sartner.index") . '">View Lists</a>';
        return response()->json($msg);
    }


    public function edit($id)
    {
        $data = Sartner::findOrFail($id);
        return view('admin.sartners.edit', compact('data'));
    }

    public function update(SartnerRequest $request, $id)
    {
        $data = Sartner::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/assets/images', $name);
            @unlink('public/assets/images/' . $data->photo);
            $input['photo'] = $name;
        }

        $data->fill($input)->save();

        $msg = 'Data Updated Successfully.' . '<a href="' . route("admin.sartner.index") . '">View Lists</a>';
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $data = Sartner::findOrFail($id);
        @unlink('assets/images/' . $data->photo);
        $data->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }
}
