<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'email' => 'required|email',
            'theme' => 'required|max:50',
            'message' => 'required|max:500'
        ];
    }

    public function messages() {
        return[
            'name.required' => 'Поле Имя является обязательным',
            'email.required' => 'Поле Email является обязательным',
            'email.email' => 'Введите корректный Email',
            'theme.required' => 'Поле Тема является обязательным',
            'message.required' => 'Поле Текст является обязательным',
        ];
    }
}
