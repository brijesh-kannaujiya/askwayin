<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeBannerAdvertisementRequest;
use App\Models\HomeBannerAdvertisement;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class HomeBannerAdvertisementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
        $datas = HomeBannerAdvertisement::orderBy('id', 'desc');

        return Datatables::of($datas)
            ->editColumn('created_at', function (HomeBannerAdvertisement $data) {
                return $data->created_at->format('d M,Y');
            })
            ->editColumn('photo', function (HomeBannerAdvertisement $data) {
                $photo = $data->photo ? url('public/assets/images/' . $data->photo) : url('public/assets/images/noimage.png');
                return '<img src="' . $photo . '" alt="Image">';
            })

            ->addColumn('action', function (HomeBannerAdvertisement $data) {

                return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  ' . 'Actions' . '
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.home_banner_advertisement.edit', $data->id) . '"  class="dropdown-item">' . __("Edit") . '</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="' .  route('admin.home_banner_advertisement.delete', $data->id) . '">' . __("Delete") . '</a>
                                </div>
                              </div>';
            })
            ->rawColumns(['photo', 'action'])
            ->toJson();
    }

    public function index()
    {
        return view('admin.home_banner_advertisement.index');
    }

    public function create()
    {
        return view('admin.home_banner_advertisement.create');
    }

    public function store(HomeBannerAdvertisementRequest $request)
    {


        $data = new HomeBannerAdvertisement();
        $input = $request->all();

        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/assets/images', $name);
            $input['photo'] = $name;
        }
        $data->fill($input)->save();
        die('dbbbd');
        $msg = 'New Data Added Successfully.' . '<a href="' . route("admin.home_banner_advertisement.index") . '">View Lists</a>';
        return response()->json($msg);
    }

    public function edit($id)
    {
        $data = HomeBannerAdvertisement::findOrFail($id);
        return view('admin.home_banner_advertisement.edit', compact('data'));
    }

    public function update(HomeBannerAdvertisementRequest $request, $id)
    {
        $data = HomeBannerAdvertisement::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/assets/images', $name);
            @unlink('public/assets/images/' . $data->photo);
            $input['photo'] = $name;
        }
        $data->update($input);

        $msg = 'Data Updated Successfully.' . '<a href="' . route("admin.home_banner_advertisement.index") . '">View Lists</a>';
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $data = HomeBannerAdvertisement::findOrFail($id);
        @unlink('assets/images/' . $data->photo);
        $data->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }
}
