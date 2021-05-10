<?php

namespace App\Http\Requests;

use App\Rules\ContainUppercase;
use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => ['required', new ContainUppercase],
            'description' => 'required'
        ];

    }

    /**
     * Custom
     *
     * @return void
     */
    public function messages()
    {
        return [
            'name.required' => 'Need input',
            'name.integer' => 'Need number',
            'description.required' => 'Need input',
        ];
    }

}
