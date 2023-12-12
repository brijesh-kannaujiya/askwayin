<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdvertiseWithUs;
use Illuminate\Http\Request;
use Datatables;
use DB;

class AdvertiseWithUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    

    public function index(){
        $data = DB::select('select * from advertise_with_us');
        return view('admin.advertisewithus.index',['data'=>$data]);
        //return view('admin.advertisewithus.index');
    }
   
    
   

    public function bulkdelete(Request $request){
        $ids = $request->bulk_id;
        $bulk_ids = explode(",",$ids);
        foreach($bulk_ids as $key=>$id){
            if($id){
                try {
                    $this->delete($id);
                    $msg = 'Data Deleted Successfully.';
                } catch (\Throwable $th) {
                    $msg = 'Something went wrong.';
                }
            }
        }
        return response()->json($msg);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM advertise_with_us WHERE id = ?', [$id]);
        $msg = 'Data Deleted Successfully.';
         
    }

    public function delete($id){
        $data = AdvertiseWithUs::findOrFail($id);
        $data->delete();

        return true;
    }
}
