<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'is_registered' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '"Имя" обязательно к заполнению',
            'name.string' => '"Имя пользователя" дожно быть строкой',
            'email.required' => '"Email" обязательно к заполнению',
            'email.string' => '"Email" дожно быть строкой',
            'email.email' => 'Поле "Email" дожно соответствоавть формату почты - пример mail@some.domain',
            'message.required' => 'Это поле обязательно к заполнению',
            'message.string' => 'Это поле дожно быть строкой'
        ];
    }
}
