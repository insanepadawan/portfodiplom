<?php

namespace App\Http\Requests\User;

use App\Rules\AZPhoneChecker;
use App\Rules\GEPhoneChecker;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        $this->redirect = url()->previous();
        return [
            'name' => 'required|min:2|max:100',
            'email' => 'required|min:2|max:100|unique:users,email',
            'password' => 'required|min:2|max:32'
        ];
    }
}
