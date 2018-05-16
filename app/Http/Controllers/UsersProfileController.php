<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class UsersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userDetails = UserProfile::find($id);
        return view('users.profile')->with('userDetails', $userDetails);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userDetails = UserProfile::find($id);
        return view('users.edit')->with('userDetails', $userDetails);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        
        $userDetails = UserProfile::find($id);
        $userDetails->email = $request->input('email');
        $userDetails->name = $request->input('name');
        $userDetails->save();
        return redirect('http://localhost:85/laravelapps/myFirstLaravelApp/public/profile/' . auth()->user()->id)->with('success', 'User Updated');
    }
}