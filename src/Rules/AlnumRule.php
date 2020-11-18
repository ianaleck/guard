<?php

namespace VGuard\Rules;

use VGuard\Contracts\RuleContract;

class AlnumRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return (bool) preg_match('/^[\pL\pM\pN]+$/u', $value);
    }

    public function error()
    {
        return '{field} must be alphanumeric.';
    }

    public function canSkip()
    {
        return true;
    }
}
