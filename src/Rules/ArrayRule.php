<?php

namespace Guard\Rules;

use Guard\Contracts\RuleContract;

class ArrayRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return is_array($value);
    }

    public function error()
    {
        return '{field} must be an array.';
    }

    public function canSkip()
    {
        return true;
    }
}
