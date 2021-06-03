<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ByPhoneChecker implements Rule
{
    public function passes($attribute, $value)
    {
        if(preg_match_all('/^(\+|)?\(?375\)?[\s\-]?\(?[0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $value)) {

            $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

            if (strlen($phone) == 12) {

                $acceptedCodes = [
                    24,
                    25,
                    29,
                    33,
                    44
                ];

                $phone = substr($phone, 3, 2);

                if (in_array($phone, $acceptedCodes))
                    return true;

            }
        }

        return false;
    }

    public function message()
    {
        return trans('auth.phone');
    }
}
