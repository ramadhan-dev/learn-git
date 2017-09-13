<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersyaratanRequest extends FormRequest
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
            'deskripsi' => 'required|unique:persyaratans',
            'keterangan' => 'required',
            'status' => 'required',
        ];

        
    }

    public function messages()
    {
        return [
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'deskripsi.unique' => 'Deskripsi Sudah ada',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong'
        ];
    }
}
