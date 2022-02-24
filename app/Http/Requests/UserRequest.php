<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'     => 'required|max:255',
            'password' => 'required',
            'mobile'   => 'required|min:10|max:11',
            'email'    => 'required',
        ];
    }#'nullable|date',
}
