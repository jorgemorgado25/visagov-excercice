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

    public function messages()
    {
        return[
            'email.required'   => 'Email is required',
            'eamil.email'      => 'Email format not valid',
            'message.required' => 'Message is required',
            'message.min'      => 'Message should contain at least 10 charactes'
        ];
    }
}
