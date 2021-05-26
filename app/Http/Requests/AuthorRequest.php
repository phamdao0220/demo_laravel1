<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required',
            'birthday' => 'required',
            'product' => 'required',
            'nationality' => 'required',
            'img' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trường name không được để trống',
            'birthday.required' => 'Trường ngày tháng năm sinh không được để trống ',
            'product.required' => 'Trường số lượng sản phẩm không được để trống ',
            'nationality.required' => 'Trường quốc tịch không được để trống ',
            'img.required' => 'Trường ảnh không được để trống ',
        ];
    }
}
