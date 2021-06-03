<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Log;

class UzPhoneChecker implements Rule
{
    public function passes($attribute, $value)
    {
        if(preg_match_all('/^(\+998)?[\s\-]?[0-9]{2}[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $value)) {
            $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);
            if(strlen($phone) == 12) {
                return true;
            }
        }
        return false;
    }

    public function message()
    {
        return __('validation.regex');
    }
}
