<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'img' => 'image|required',
            'price' => 'required|numeric',
            'name' => 'required|max:150',
            'description' => 'required|max:500',
            'quantity' => '',
            'discount'  => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'img.image' => 'Файл мусить бути зображенням',
            'img.required' => "Файл обов'зковий",
            'price.required' => "Ціна обов'язкова",
            'price.numeric' => 'Ціна має бути числом',
            'name.required' => "Ім'я обов'язкове",
            'name.max' => "Ім'я мусить бути меньше 150 символів",
            'description.required' => "Опис обов'язковий",
            'description.max' => "Опис має бути меньший за 500 символів",
            'quantity.numeric' => 'Кількість має бути числом',
            'quantity.required' => "Кількість обов'язкова",
            'discount.numeric' => 'Знижка має бути числом',
            'discount.required' => "Знижка обов'язкова",
        ];
    }
}
