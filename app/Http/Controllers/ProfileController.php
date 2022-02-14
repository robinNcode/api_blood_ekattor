<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'name' => 'required|string|max:255',
        ]);

        $profile = new Profile();

        if($request->hasFile('image')){
            $fileName = date('Y_m_d_Hi') . '_'. $request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('public/uploads', $fileName);
            $request->image->move(public_path('uploads'), $fileName);
            dd($filePath);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param int $user_id
     * @return Response
     */
    public function show(int $user_id)
    {
        return Profile::find($user_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Profile $profile
     * @return void
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProfileRequest $request
     * @param Profile $profile
     * @return void
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Profile $profile
     * @return void
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
