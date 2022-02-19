<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginAttepmt(Request $request)
    {
        if (!$request->has('email') || !$request->has('password')) {
            return NULL;
        } else {
            $user = User::where('email', $request->email)->where('password', $request->password)->first();

            if ($user == NULL) {
                $user_info ['status'] = 'error';
                return response()->json($user_info, 200);
            } else {
                $user_details = User::getAllInformation($user->id);

                $user_info = [
                    'user_id' => $user_details->id,
                    'name' => $user_details->profiles[0]->name,
                    'image' => $user_details->profiles[0]->image,
                    'blood_group' => $user_details->profiles[0]->blood_group,
                    'phone' => $user_details->profiles[0]->phone,
                    'address' => $user_details->profiles[0]->address,
                    'district' => $user_details->profiles[0]->district,
                    'thana' => $user_details->profiles[0]->thana,
                ];

                return response()->json($user_info, 200);
            }
        }
    }
}
