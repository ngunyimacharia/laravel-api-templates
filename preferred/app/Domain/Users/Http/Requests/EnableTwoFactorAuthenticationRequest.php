<?php

namespace Preferred\Domain\Users\Http\Requests;

use Preferred\Interfaces\Http\Controllers\FormRequest;

class EnableTwoFactorAuthenticationRequest extends FormRequest
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
            'one_time_password' => [
                'required',
                'string',
                'size:6',
            ],
        ];
    }
}
