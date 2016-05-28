<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OwnerRequest extends Request
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
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email', 
        'address'=>'required|max:200',
        'phone_number' => 'required|min:2',
        'zip_code' => 'required|min:2',
        'dob' => 'required|min:2',
        ];
    }
}
