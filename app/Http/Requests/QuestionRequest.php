<?php

namespace App\Http\Requests;

use App\Rules\AZPhoneChecker;
use App\Rules\GEPhoneChecker;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{

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
        $this->redirect = url()->previous(). '#question_send';

        return [
            'name' => 'required|min:2|max:100',
            'phone' => ['required', new GEPhoneChecker()],
            'email' => 'required|email',
            'question' => 'required|min:8',
        ];
    }
}
