<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cartForm extends FormRequest
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
            'name'      => 'required|max:25',
            'number'    => 'required|min:4|max:16',
            'adress'    => 'required',
            'city'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => "Необхідно додати ім'я",
            'name.max'          => "Завелике ім'я",
            'number.required'   => 'Необїідно додати номер',
            'number.min'        => 'Номер вказан із помилкою',
            'number.max'        => 'Номер вказан із помилкою',
            'adress.required'   => 'Необхідно додати адресу',
            'city.required'     => 'Необхідно вказати місто',
        ];
    }
}
