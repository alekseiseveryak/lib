<?php

namespace Severyak;

use InvalidArgumentException;

class Brackets
{
    protected string $str;

    public function __construct($str)
    {
        $re = '/^[ ()\t\r\n]+$/s';

        if (preg_match($re, $str)) {
            $this->str = $str;
        } else {
            throw new InvalidArgumentException();
        }
    }

    public function check()
    {
        $result = false;
        $re = '/^((?>[^()]|\((?1)\))*)$/s';

        if (preg_match($re, $this->str)) {
            $result = true;
        }
        return $result;
    }
}
