<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePekerjaanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_perusahaan' => [
                'required',
                'max:100'
            ],
            'alamat_perusahaan' => [
                'required',
                'max:150'
            ],
            'nomor_telepon' => [
                'required',
                'max:16'
            ],
            'sesuai_jurusan' => [
                'required',
                'max:10'
            ],
            'besar_gaji' => [
                'required',
                'max:50'
            ],
            'bulan_tahun_masuk_kerja' => [
                'required',
                'max:16'
            ],
            'sektor_perusahaan' => [
                'required',
                'max:100'
            ],
            'jabatan' => [
                'required',
                'max:100'
            ],
            'deskripsi_kerja' => [
                'required',
                'max:150'
            ]
        ];
    }
}
