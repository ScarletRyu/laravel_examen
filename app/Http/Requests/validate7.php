<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validate7 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:20',
            'email' => 'required',
            'password' => 'required|min:8|max:10',
            'likes' => 'required',
            
        ];
    }
}
