<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Event extends FormRequest
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
            'name' => 'required|unique:events',
            'start_date' => 'required',
            'end_date' => 'required'
        ];
    }

    /**
     * Customized the error message for the name field.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'        => 'Name of event is required.',
            'start_date.required'  => 'The initial date is required.',
            'end_date.required'    => 'The end date is required.'
        ];
    }
}
