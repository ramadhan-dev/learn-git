<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CekdokumentRequest extends FormRequest
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
            'izin' => 'required',
            'persyaratan' => 'required',
        ];

        
    }

    public function messages()
    {
        return [
            'izin.required' => 'Izin tidak boleh kosong',
            'persyaratan.required' => 'Persyaratan tidak boleh kosong',
        ];
    }
}
