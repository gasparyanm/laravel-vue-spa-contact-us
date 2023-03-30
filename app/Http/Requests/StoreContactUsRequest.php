<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'min:3',
                'string',
            ],
            'email' => [
                'required',
                'email',
            ],
            'subject' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
                'min:2',
            ]
        ];
    }
}
