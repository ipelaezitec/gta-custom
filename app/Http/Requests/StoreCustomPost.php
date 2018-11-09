<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomPost extends FormRequest
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
            'logo' => 'required|URL|max:255',
            'background' => 'required|URL|max:255',
            'video' => 'required|URL|max:255',
            'color' => 'required',
            'chosen-color' => 'required|max:7',
            'image1' => 'required|URL|max:255',
            'image2' => 'URL|max:255',
            'image3' => 'URL|max:255',
            'image4' => 'URL|max:255',
            'image5' => 'URL|max:255',
        ];
    }
}
