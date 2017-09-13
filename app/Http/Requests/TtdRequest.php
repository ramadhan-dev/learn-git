<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TtdRequest extends FormRequest
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
        'nama' => 'required',
        'nip' => 'required',
        'jabatan' => 'required',
        'pangkat' => 'required',
        'header' => 'required',
        'title1' => 'required',
        'title2' => 'required',
        'dari' => 'required',
        'sampai' => 'required',
        'sebagai' => 'required',
        'status' => 'required',
        'ttd' => 'required',    
        ];
    }

    public function messages()
    {
        return [
        'nama.required' => 'Namae tidak boleh kosong',
        'nip.required' => 'Nip tidak boleh kosong',
        'jabatan.required' => 'Jabatan tidak boleh kosong',
        'pangkat.required' => 'Pangkat tidak boleh kosong',
        'header.required' => 'Header tidak boleh kosong',
        'title1.required' => 'Title 1 tidak boleh kosong',
        'title2.required' => 'Title 2 tidak boleh kosong',
        'dari.required' => 'Dari tidak boleh kosong',
        'sampai.required' => 'Selesai idak boleh kosong',
        'sebagai.required' => 'Sebagai tidak boleh kosong',
        'status.required' => 'Status tidak boleh kosong',
        'ttd.required' => 'Foto tidak boleh kosong',    
        ];
    }
}
