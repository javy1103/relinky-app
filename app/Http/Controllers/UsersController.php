<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use App\User;
use Auth;
use Validator;

class UsersController extends Controller
{

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
    public function show($username) {
        $user = User::whereUsername($username)->with('profile')->firstOrFail();
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($username) {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request) {


        Auth::user()->update($request->all());
        return response()->json( ['message' => "Account successfully updated."], 200 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $username ) {
        //
    }

    public function toggleAcct( $input ) {
        $message = (Auth::user()->toggleAcct($input))
            ? "Account successfully updated."
                : "There was a problem while updating your account.";
        return response()->json( ['message' => $message], 200);
    }

    public function changePassword( $args ) {
        Auth::user()->update([ 'password' => bcrypt($args) ]);
        return response()->json( ['message' => "Account successfully updated."], 200 );
    }

}
