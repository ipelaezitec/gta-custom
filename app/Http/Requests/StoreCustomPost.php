<?php

namespace gta\Http\Requests;

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
            'colorbtn' => 'required',
            'bgcolorbtn' => 'required',
            'chosen-colorbtn' => 'required|min:7|max:7',
            'chosen-bgcolorbtn' => 'required|min:7|max:7',
            'image1' => 'required|URL|max:255',
            'image2' => 'required|URL|max:255',
            'image3' => 'required|URL|max:255',
            'image4' => 'required|URL|max:255',
            'image5' => 'required|URL|max:255',
            'editordata'=> 'required|min:1|max:2300',
        ];
    }
}
