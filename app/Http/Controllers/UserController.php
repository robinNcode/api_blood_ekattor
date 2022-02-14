<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBloodRequestRequest;
use App\Http\Requests\UpdateBloodRequestRequest;
use App\Models\BloodRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return User[]|Collection
     */
    public function index()
    {
        return User::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        if($user == TRUE){
            return response()->json(['status' => 'success', 'message' => 'Registration Complete!'], 200);
        }
        else{
            return response()->json(['status' => 'error', 'message' => 'Please try again.'], 400);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $user_id
     * @return void
     */
    public function edit($user_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $user_id
     * @return void
     */
    public function update($user_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user_id
     * @return void
     */
    public function destroy($user_id)
    {
        //
    }
}
