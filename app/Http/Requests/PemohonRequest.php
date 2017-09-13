<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemohonRequest extends FormRequest
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
            'pemohon' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'npwp' => 'required|min:15',
            'telpon' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
            'jekel' => 'required',
            'nik' => 'required',
            'hp' => 'required',
        ];

        
    }

    public function messages()
    {
        return [
            'pemohon.required' => 'data Pemohon harus diisi',
            'nama.required' => 'data Nama harus diisi',
            'alamat.required' => 'data alamat harus diisi',
            'npwp.required' => 'data npwp harus diisi',
            'kota.required' => 'data kota harus diisi',
            'kecamatan.required' => 'data kecamatan harus diisi',
            'desa.required' => 'data desa harus diisi',
            'npwp.min' => 'data npwp minimal 15 angka',
            'telpon.required' => 'data telepon harus diisi',
            'email.required' => 'data email harus diisi',
            'jabatan.required' => 'data jabatan harus diisi',
            'jekel.required' => 'data jekel harus diisi',
            'nik.required' => 'data nik harus diisi',
            'hp.required' => 'data hp harus diisi',
        ];
    }
}
