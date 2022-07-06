<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name'=> 'required|string|max:100',
            'author'=> 'required|max:100',
            'categories_id'=> 'required|exists:categories,id',
            'description' => 'required',
            'description' => 'required',
            'photo' => 'required|image'
            // 'pdf'=> 'required|required|file|mimes:pdf|max:2048'
        ];
    }
}