<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $this->user->id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '"Имя пользователя" обязательно к заполнению',
            'name.string' => '"Имя пользователя" дожно быть строкой',
            'email.required' => '"Email" обязательно к заполнению',
            'email.string' => '"Email" дожно быть строкой',
            'email.email' => 'Поле "Email" дожно соответствоавть формату почты - пример mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже существет',
            'role.required' => 'Это поле необходимо заполнить',
        ];
    }
}
