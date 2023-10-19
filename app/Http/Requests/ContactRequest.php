<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'   => 'required||regex:/(.+)@(.+)\.(.+)/i',
            'message' => 'required|min:10',
        ];
    }
}
