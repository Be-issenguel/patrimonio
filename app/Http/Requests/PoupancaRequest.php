<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoupancaRequest extends FormRequest
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
            'motivo' => 'required|unique:poupancas,motivo',
            'valor_final' => 'required',
        ];
    }

    /**
     * Get the validation message show to user.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'unique' => 'Já existe uma poupança com este :attribute'
        ];
    }
}
