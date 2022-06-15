<?php

namespace App\Http\Requests\Admin\Category;

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
            'title' => 'required|string',
            'image' => 'required|file',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно к заполнению',
            'title.string' => 'Это поле дожно быть строкой',
            'image.required' => 'Поле "Добавить изображение" обязательно к заполнению',
            'image.file' => 'Необходимо выбрать файл',
        ];
    }
}
