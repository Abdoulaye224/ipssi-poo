<?php
namespace Ipssi\Evaluation;

class NotExistIndexException extends IpssiPooException
{
    public function __construct()
    {
        $this->message = 'no number to this index';
    }
}
