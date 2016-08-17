<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UpdateUsersRequest extends Request
{

    // Get data to be validated from the request.
    protected function validationData()
    {
        return $this->has('isActive') ? Boolean($this->only('isActive')) : $this->all();
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'isActive' => 'sometimes|boolean',
            'name' => 'sometimes|required|min:3|max:255',
            'username' => 'sometimes|required|min:6|unique:users,username,'.Auth::user()->id,
            'email' => 'sometimes|required|email|min:3|max:255|unique:users,email,'.Auth::user()->id,
            'password' => 'sometimes|required|confirmed|min:6',
        ];
    }
}
