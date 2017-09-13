<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IzinRequest extends FormRequest
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
            'jenis' => 'required|unique:izins',
            'kategori' => 'required'
        ];

        
    }

    public function messages()
    {
        return [
            'jenis.required' => 'Izin tidak boleh kosong',
            'jenis.unique' => 'Izin sudah ada',
            'kategori.required' => 'Kategori tidak boleh kosong'
        ];
    }
}
