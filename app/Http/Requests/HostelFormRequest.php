<?php

namespace HMS\Http\Requests;

use HMS\Http\Requests\Request;

class HostelFormRequest extends Request
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
            'name' => 'required|string',
            'slug' => 'required|string',
            'type' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'description' => 'required'
        ];
    }
}
