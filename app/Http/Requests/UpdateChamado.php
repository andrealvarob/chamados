<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChamado extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /*
            'titulo' => 'required|string|max:150',
            'solicitante' => 'required|string|max:150',
            'solicitacao' => 'required|string|max:150',
            'setor' => 'required|string|max:150',
            'data' => 'required',
            'status' => 'required',
            'prioridade' => 'required'*/


        ];
    }
}
