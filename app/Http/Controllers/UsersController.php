<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use Storage;

class UsersController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    // Show users dashboard
    public function dashboard() {
        return view('users.dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( User $user ) {
        dd($user->id);
        $user = User::whereUsername( $username )->with('profile')->firstOrFail();
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $username ) {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateUsersRequest $request ) {

        if( $request->has('password') ) $this->changePassword( $request->password );

        Auth::user()->update($request->all());
        return response()->json( ['message' => "Account successfully updated."], 200 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $username ) {
        //
    }

    public function changePassword( $password ) {

        Auth::user()->update([ 'password' => bcrypt( $password ) ]);
        return response()->json( ['message' => "Account successfully updated."], 200 );
    }

    public function uploadFile( Request $request )
    {
        $user = Auth::user();
        $file = $request->file('image');
        $path = $file->storeAs("images/{$user->id}", "profile.{$file->extension()}", 's3');
        $user->profile->update( ['profile_img' => $path] );

        return response()->json( [ 'url' => 'Updated' ], 200 );
    }
}
