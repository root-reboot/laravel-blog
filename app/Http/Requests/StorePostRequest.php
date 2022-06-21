<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000'
            ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Название статьи обязательно для заполнения',
            'name.unique' => 'Данное имя статьи уже существует, придумайте другое имя.',
            'body.required'  => 'Поле Текст статьи обязательно для заполнения',
            'body.min'  => 'Минимальня длинна статьи 1000 символов.'
          ];
    }
}
