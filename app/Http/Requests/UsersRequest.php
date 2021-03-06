<?php

namespace controleDeUsuarios\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|max:255',
            'password' => 'required',
            'categoria_id' => 'required'
        ];
    }

    public function messages()
    {
    return [
        // 'nome.required' => 'The :attribute field can not be empty.',
        'required' => 'The :attribute field can not be empty.',
    ];
    }
}
