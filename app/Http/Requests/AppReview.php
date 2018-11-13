<?php

namespace gta\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppReview extends FormRequest
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
            'explanation' => 'max:4000',
        ];
        // falta el checkbox?
    }
}
