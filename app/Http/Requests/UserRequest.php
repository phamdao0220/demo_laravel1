<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required|max:255|min:6|email',
            'password'=>'required|max:15|min:3',
        ];
    }
    public function messages(){
        return [
            'email.required' => 'Trường email không được để trống',
            'password.required' => 'Trường password không được để trống',
            'email.min' =>('Email phải hơn 5 ký tự .'),
            'email.max' =>('Email không được vượt quá 255 ký tự.'),
            'email.email' =>('Email chưa đúng định dạng' ),
            'password.min' =>('Password phải hơn 3 ký tự.'),
            'password.max' =>('Password phải không được vượt quá 15 ký tự.')

        ];
    }
}
