<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErreskatatuakRequest extends FormRequest
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
            'izena' => 'required|string|min:3|max:100',
            'abizena' => 'required|string|min:3|max:100',
            'adina' => 'required|numeric|min:1',
        ];
    }

    public function messages() {
        return [
            'izena.required' => 'Izena derrigorrezkoa da.',
            'izena.string' => 'Izena testu bat izan behar da.',
            'izena.min' => 'Izena gutxienez 3 karakterekoa izan behar da.',
            'izena.max' => 'Izena gehienez 100 karakterekoa izan daiteke.',

            'abizena.required' => 'Abizena derrigorrezkoa da.',
            'abizena.string' => 'Abizena testu bat izan behar da.',
            'abizena.min' => 'Abizena gutxienez 3 karakterekoa izan behar da.',
            'abizena.max' => 'Abizena gehienez 100 karakterekoa izan daiteke.',

            'adina.required' => 'Adina derrigorrezkoa da.',
            'adina.numeric' => 'Adina zenbaki bat izan behar da.',
            'adina.min' => 'Adina gutxienez 1 izan behar da.',


        ];
    }
}
