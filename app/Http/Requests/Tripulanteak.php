<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tripulanteak extends FormRequest
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
            'abizena' => 'required|string|min:3|max:255',
            'sartze_data' => 'required|date',
            'baja_data' => 'required|date|after_or_equal:sartze_data',
            'bidaiak' => 'required',
        ];
    }

    public function messages() {
        return [
            'izena.required' => 'Izena sartu behar duzu.',
            'izena.string' => 'Izena testu bat izan behar da.',
            'izena.min' => 'Izena gutxienez 3 karakterekoa izan behar da.',
            'izena.max' => 'Izena gehienez 255 karakterekoa izan behar da.',

            'abizena.required' => 'Abizena sartu behar duzu.',
            'abizena.string' => 'Abizena testu bat izan behar da.',
            'abizena.min' => 'Abizena gutxienez 3 karakterekoa izan behar da.',
            'abizena.max' => 'Abizena gehienez 255 karakterekoa izan behar da.',

            'sartze_data.required' => 'Sartze data sartu behar duzu.',
            'sartze_data.date' => 'Sartze data baliozko data bat izan behar da.',

            'baja_data.required' => 'Baja data sartu behar duzu.',
            'baja_data.date' => 'Baja data baliozko data bat izan behar da.',
            'baja_data.after_or_equal' => 'Baja data sartze data edo beranduago izan behar da.',

            'bidaiak.required' => 'Bidaiak aukeratu behar dituzu.',
        ];
    }

}
