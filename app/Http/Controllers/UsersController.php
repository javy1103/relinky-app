<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::whereUsername($username)->with('profile')->firstOrFail();
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = Auth::user();
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if( isset( $request->isActive ) ) {
            $this->toggleAcct( $request->isActive );
        }

        $validator = $this->validator( $request->all() );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        Auth::user()->update($request->all());

        return response()->json( ['message' => "Account successfully updated."], 200 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        //
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        return Validator::make($request, [
            'name' => 'sometimes|required|min:3|max:255',
            'username' => 'sometimes|require|min:6|unique:users',
            'email' => 'sometimes|email|min:3|max:255|unique:users',
            'password' => 'sometimes|require|min:6',
        ]);
    }

    protected function toggleAcct($input) {
        $message = (Auth::user()->toggleAcct($input))
            ? "Account successfully updated."
                : "There was a problem while updating your account.";
        return response()->json( ['message' => $message], 200);
    }

}
