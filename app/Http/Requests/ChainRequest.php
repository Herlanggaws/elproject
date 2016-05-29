<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChainRequest extends Request
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
            'name' => 'name|min:2',
            'website' => 'required|min:2',
            'first_name' => 'required|min:2',
            'about' => 'required|min:2',
            'owner_id' => 'required|min:1',

        ];
    }
}
