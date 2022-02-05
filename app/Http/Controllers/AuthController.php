<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginAttepmt(Request $request){
        if(!$request->has('email') || !$request->has('password')){
            return response()->json(['message' => 'Please provide email and password'], 400);
        }
        else{
            $user = User::where('email', $request->email)->where('password', $request->password)->first();
            $user_details = User::getAllInformation($user->id);
            
            $user_info = [
                'user_id' => $user_details->id,
                'name' => $user_details->profiles[0]->name,
                'image' => $user_details->profiles[0]->image,
                'email' => $user_details->profiles[0]->email,
                'blood_group' => $user_details->profiles[0]->blood_group,
                'phone' => $user_details->profiles[0]->phone,
                'address' => $user_details->profiles[0]->address,
                'district' => $user_details->profiles[0]->district,
                'thana' => $user_details->profiles[0]->thana,
            ];

            if($user == NULL){
                return response()->json(['message' => 'Invalid email or password'], 400);
            }
            else{
                return response()->json(['message' => 'Login successful', 'user_info' => $user_info], 200);
            }
        }
    }

}
