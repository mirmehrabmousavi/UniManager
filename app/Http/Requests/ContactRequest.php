<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            /*'collegian' => 'required',
            'read_status' => 'required',*/
            'date' => 'required',
            'contact_platform' => 'required',
            'contact_reason' => 'required',
            'contact_description' => 'required' ,
        ];
    }
}
