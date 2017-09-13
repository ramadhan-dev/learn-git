<?php

namespace App\Http\Requests;

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
            'username' => 'required|min:6|unique:users',
            'name' => 'required|min:6',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required'
        ];

        
    }

    public function messages()
    {
        return [
            'name.required' => 'Name tidak boleh kosong',
            'name.min' => 'Name Minimal 6 Karakter',
            'username.required' => 'Username tidak boleh kosong',
            'username.min' => 'Username Minimal 6 Karakter',
            'role.required' => 'Role tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email address sudah ada',
            'password.required' => 'Pasword tidak boleh kosong'
        ];
    }
}
