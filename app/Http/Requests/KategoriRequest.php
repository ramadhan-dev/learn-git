<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'nama' => 'required|unique:kategoris'
        ];

        
    }

    public function messages()
    {
        return [
            'nama.required' => 'Kategori tidak boleh kosong',
            'nama.unique' => 'Kategori sudah ada'
        ];
    }
}
