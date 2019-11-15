<?php

namespace Ipssi\Evaluation;

class NotNumericException extends IpssiPooException
{
    public function __construct()
    {
        $this->message = 'ce neest pas un  entier';
    }
}