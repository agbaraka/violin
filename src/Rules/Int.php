<?php

namespace Violin\Rules;

class Int
{
    public function run($name, $value)
    {
        if (!is_int($value)) {
            return false;
        }
    }
}
