<?php

namespace App\Http\Requests\Admin\Post;

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
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|required|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно к заполнению',
            'title.string' => 'Это поле дожно быть строкой',
            'content.required' => 'Это поле обязательно к заполнению',
            'content.string' => 'Это поле дожно быть строкой',
            'preview_image.required' => 'Поле "Добавить превью" обязательно к заполнению',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Поле "Добавить главное изображение" обязательно к заполнению',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле обязательно к заполнению',
            'category_id.integer' => 'id категории должно быть числом',
            'category_id.exists' => 'id категории должно быть в базе данных',
            'tag_ids' => 'Необходимо отправить массив данных'
        ];
    }
}
