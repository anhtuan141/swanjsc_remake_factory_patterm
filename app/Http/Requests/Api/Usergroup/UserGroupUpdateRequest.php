<?php

namespace App\Http\Requests\Api\Usergroup;

use Illuminate\Foundation\Http\FormRequest;

class UserGroupUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'alias' => 'required',
            'status' => 'required'
        ];
    }
}
