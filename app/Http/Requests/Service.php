<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Service extends FormRequest
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
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png|image|max:500',
            'order' => 'integer'
        ];
    }
    
    
    public function messages()
    {
    return [
        'image.required' => 'You haven\'t choose a photo.',
        'image.max' => 'Your photo is too large, must be less than :max kb.',
        'image.mimes' => 'your extention must be jpej or png'
        
    ];
    }
}
