<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    public function DeviceToken(Request $request)
    {

        $rules = [
            'device_id' => 'required',
            'language' => 'required',
            // Add other validation rules as needed
        ];

        // Custom error messages
        $messages = [
            'device_id.required' => 'The device ID field is required.',
            'language.required' => 'The language field is required.',
            // Add other custom messages as needed
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            // You can customize how you want to handle the validation errors here
            // For example, return a JSON response with the errors
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Use updateOrCreate to update or create the device
        $device = Device::updateOrCreate([
            'device_id'   => $request['device_id'],
        ], [
            'language'     => $request['language'],
        ]);


        return response()->json(['message' => 'Device updated or created successfully', 'data' => $device]);
    }
}
