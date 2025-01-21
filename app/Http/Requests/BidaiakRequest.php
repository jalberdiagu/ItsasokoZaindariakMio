<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BidaiakRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'helmuga' => 'required|string|min:3|max:100',
            'abiapuntua' => 'required|string|min:3|max:100',
            'data' => 'required|date',
        ];
    }

    public function messages() {
        return [
            'helmuga.required' => 'Helmuga derrigorrezkoa da.',
            'helmuga.string' => 'Helmuga testu bat izan behar da.',
            'helmuga.min' => 'Helmuga gutxienez 3 karakterekoa izan behar da.',
            'helmuga.max' => 'Helmuga gehienez 100 karakterekoa izan daiteke.',

            'abiapuntua.required' => 'Abiapuntua derrigorrezkoa da.',
            'abiapuntua.string' => 'Abiapuntua testu bat izan behar da.',
            'abiapuntua.min' => 'Abiapuntua gutxienez 3 karakterekoa izan behar da.',
            'abiapuntua.max' => 'Abiapuntua gehienez 100 karakterekoa izan daiteke.',

            'data.required' => 'Data derrigorrezkoa da.',
            'data.date' => 'Data baliozko data bat izan behar da.',
        ];
    }

}
