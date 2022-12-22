<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarketerRequest extends FormRequest
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
            'name' => 'required',
            'type' => 'required',
            'number' => 'required',
            'address' => 'required',
            'melli_code' => 'required',
            'static_number' => 'required',
            'known_number' => 'required',
        ];
    }
}
