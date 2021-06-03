<?php

namespace App\Services;

class SMSService {

    protected $phone;

    public function __construct ($phone)
    {
        $this->phone = $phone;
    }

    public function send ()
    {
        // send SMS functionality
    }

}
