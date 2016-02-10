<?php

namespace HMS\Http\Requests;

use HMS\Http\Requests\Request;

class RoomFormRequest extends Request
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
            'room_type' => 'required',
            'hostel_id' => 'required',
            'price' => 'required|numeric'
        ];
    }
}
