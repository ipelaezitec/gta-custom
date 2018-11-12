<?php

namespace gta\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApplication extends FormRequest
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
        // dd($request);
        return [
            'answer1' => 'required|min:1|max:100',
            'age' => 'required|min:1|max:99',
            'departament' => 'required',
            'answer2' => 'required|min:1|max:4000',
            'answer3' => 'required|min:1|max:4000',
            'answer4' => 'required|min:1|max:4000',
            'answer5' => 'required|min:1|max:4000',
            'answer6' => 'required|min:1|max:4000',
            'answer7' => 'required|min:1|max:4000',
        ];
        // falta el checkbox?
    }
}
