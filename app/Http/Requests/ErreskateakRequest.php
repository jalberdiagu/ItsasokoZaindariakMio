<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErreskateakRequest extends FormRequest
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
            'izena' => 'required|string|min:3|max:255',
            'deskribapena' => 'required|string|max:500',
            'data' => 'required|date',
        ];
    }

    public function messages() {
        return [
            'izena.required' => 'Izena sartu behar duzu.',
            'izena.string' => 'Izena testu bat izan behar da.',
            'izena.min' => 'Izena gutxienez 3 karakterekoa izan behar da.',
            'izena.max' => 'Izena gehienez 255 karakterekoa izan behar da.',
            'deskribapena.string' => 'Deskribapena testu bat izan behar da.',
            'deskribapena.max' => 'Deskribapena gehienez 500 karakterekoa izan behar da.',
            'data.required' => 'Data sartu behar duzu.',
            'data.date' => 'Data baliodun data bat izan behar da.',
        ];
    }
}
