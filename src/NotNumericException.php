<?php

namespace Ipssi\Evaluation;

class NotNumericException extends IpssiPooException
{
    public function __construct()
    {
        $this->message = 'it\'s not an integer'; //
    }
}