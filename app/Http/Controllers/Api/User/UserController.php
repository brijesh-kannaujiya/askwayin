<?php

namespace App\Http\Controllers\Api\User;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Str;

class UserController extends Controller
{
    //
    public function edituser(Request $request, $user_id)
    {
        //dd($user_id);
        $user = User::where('id', $user_id)->first();
        if ($user) {
            return  json_encode(['status' => true, 'userprifiledata' => $user, 'result' => 'User Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'User Data Not Found']);
        }
    }

    public function updateuser(Request $request, $user_id)
    {
        $user = User::where('id', $user_id)->first();
        $rules = [
            //'photo' => 'mimes:jpeg,jpg,png,svg',
            'email' => 'unique:users,email,' . $user->id,
            'name'     => 'required',
            'phone' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $user = User::findOrFail($user_id);
        $data = $request->all();
        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images', $name);
            if ($user->photo != null) {
                if (file_exists(public_path() . '/assets/images/' . $user->photo)) {
                    unlink(public_path() . '/assets/images/' . $user->photo);
                }
            }
            $data['photo'] = $name;
        }
        $user->update($data);
        return  json_encode(['status' => true, 'result' => 'User Information Updated Successfully']);
    }

    public function deleteUser(Request $request, $userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['result' => 'User not found']);
        }

        $user->update([
            'email' => '',

        ]);

        return response()->json(['status' => true, 'result' => 'User is_active status updated successfully', 'user' => $user]);
    }

    public function logged_user()
    {
        $loggeduser = auth()->user();
        return response([
            'user' => $loggeduser,
            'message' => 'Logged User Data',
            'status' => 'success'
        ], 200);
    }


    
    public function change_password(Request $request, $user_id)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Retrieve the authenticated user
        $user = User::where('id', $user_id)->first();

        // Check if the current password matches the user's password
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return response()->json(['result' => 'Current password is incorrect'], 401);
        }

        // Update the user's password
        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return response()->json(['status' => true, 'result' => 'Password changed successfully', 'user' => $user]);
    }

    
    public function userprofile(Request $request, $user_id)
    {
        //dd($user_id);
        $user = User::where('id', $user_id)->first();
        if ($user) {
            return  json_encode(['status' => true, 'userprifiledata' => $user, 'result' => 'User Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'User Data Not Found']);
        }
    }

    
    public function contactmailapi(Request $request)
    {
        $ps = DB::table('pagesettings')->where('id', '=', 1)->first();
        $subject = $request->subject;
        $gs = Generalsetting::findOrFail(1);
        $to = $request->to;
        $fname = $request->firstname;
        $lname = $request->lastname;
        $from = $request->email;
        $msg = "First Name: " . $fname . "\nLast Name: " . $lname . "\nEmail: " . $from . "\nMessage: " . $request->message;

        if ($gs->is_smtp) {
            $data = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];

            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);
        } else {
            $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
            mail($to, $subject, $msg, $headers);
        }

        return response()->json($ps->contact_success);
    }






}
