<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function DeviceToken(Request $request)
    {
        $data = $request->validate([
            'device_id' => 'required',
            'language' => 'required', // Add other columns as needed
        ]);

        // Use updateOrCreate to update or create the device
        $device = Device::updateOrCreate([
            'device_id'   => $data['device_id'],
        ], [
            'language'     => $data['language'],
        ]);


        return response()->json(['message' => 'Device updated or created successfully', 'data' => $device]);
    }
}
