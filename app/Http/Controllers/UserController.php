<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBloodRequestRequest;
use App\Http\Requests\UpdateBloodRequestRequest;
use App\Models\BloodRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param $user_id
     * @return void
     */
    public function show($user_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function edit($uesr_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodRequestRequest  $request
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function update($uesr_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($uesr_id)
    {
        //
    }
}
