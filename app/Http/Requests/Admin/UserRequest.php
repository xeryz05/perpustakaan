<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
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
            'name'=> 'required|string',
            'username'=> 'required|string',
            'email'=> 'required|email',
            'gender'=> 'string',
            'NIS'=> 'string|unique:users',
            'avatar' => 'image|required|max:1048',
            'roles'=> 'nullable|string|in:ADMIN,USER'
        ];
    }
}
