<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'  => 'required|min:2|max:150',
            'author' => 'required|min:2|max:150'
        ];
    }

    public function messages()
    {
        return[
            'title.required'  => 'Title is required',
            'title.min'       => 'Title should contain at least 2 charactes',
            'title.max'       => 'Title should contain max 150 charactes',
            'author.required' => 'Author is required',
            'author.min'      => 'Author should contain at least 2 charactes',
            'author.max'      => 'Author should contain max 150 charactes',
        ];
    }
}
