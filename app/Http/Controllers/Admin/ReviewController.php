<?php

namespace App\Http\Controllers\Admin;

use Datatables;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Validator;
use Purifier;

class ReviewController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function datatables()
  {
    $datas = Review::orderBy('id', 'desc')->get();

    return Datatables::of($datas)
      ->editColumn('photo', function (Review $data) {
        $photo = $data->photo ? url('public/assets/images/' . $data->photo) : url('public/assets/images/noimage.png');
        return '<img src="' . $photo . '" alt="Image">';
      })

      ->addColumn('action', function (Review $data) {

        return '<div class="btn-group mb-1">
                                  <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ' . 'Actions' . '
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a href="' . route('admin.review.edit', $data->id) . '"  class="dropdown-item">' . __("Edit") . '</a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="' .  route('admin.review.delete', $data->id) . '">' . __("Delete") . '</a>
                                  </div>
                                </div>';
      })
      ->rawColumns(['photo', 'action'])
      ->toJson();
  }

  public function index()
  {
    return view('admin.review.index');
  }

  public function create()
  {
    return view('admin.review.create');
  }

  public function store(Request $request)
  {
    $rules = [
      'photo'      => 'required|mimes:jpeg,jpg,png,svg',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }

    $data = new Review();
    $input = $request->all();
    if ($file = $request->file('photo')) {
      $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
      $file->move('public/assets/images', $name);
      $input['photo'] = $name;
    }

    $input['details'] = Purifier::clean($request->details);
    $data->fill($input)->save();

    $msg = 'New Data Added Successfully.' . '<a href="' . route("admin.review.index") . '">View Review Lists</a>';
    return response()->json($msg);
  }

  public function edit($id)
  {
    $data = Review::findOrFail($id);
    return view('admin.review.edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $rules = [
      'photo'      => 'mimes:jpeg,jpg,png,svg',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }

    $data = Review::findOrFail($id);
    $input = $request->all();
    if ($file = $request->file('photo')) {
      $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
      $file->move('public/assets/images', $name);
      @unlink('public/assets/images/' . $data->photo);
      $input['photo'] = $name;
    }
    $input['details'] = Purifier::clean($request->details);
    $data->update($input);

    $msg = 'Data Updated Successfully.' . '<a href="' . route("admin.review.index") . '">View Review Lists</a>';
    return response()->json($msg);
  }

  public function destroy($id)
  {
    $data = Review::findOrFail($id);
    @unlink('assets/images/' . $data->photo);
    $data->delete();

    $msg = 'Data Deleted Successfully.';
    return response()->json($msg);
  }
}
