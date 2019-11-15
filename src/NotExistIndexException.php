<?php
namespace Ipssi\Evaluation;

class NotExistIndexException extends IpssiPooException
{
    public function __construct()
    {
        $this->message = 'dont number to this index';
    }
}