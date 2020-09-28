<?php

namespace Xpersonas\Styleguide\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StyleguideColorPost extends FormRequest
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
            'class' => 'required|max:255',
            'description' => 'required',
            'hex' => 'regex:/^#?([0-9a-fA-F]{3}){1,2}$/i',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'hex.regex' => 'Invalid hexadecimal color. Please enter the 3 or 6
            character code. Hashtag is optional and not required.',
        ];
    }
}
