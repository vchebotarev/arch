<?php

namespace Packages\Transport\CustomerIo\SendMessage;

class TransportDto
{
    private $a0;
    private $a1;
    private $a2;
    private $a3;
    private $a4;
    private $a5;
    private $a6;
    private $a7;
    private $a8;
    private $a9;

    public function __construct($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9)
    {
        $this->a0 = $a0;
        $this->a1 = $a1;
        $this->a2 = $a2;
        $this->a3 = $a3;
        $this->a4 = $a4;
        $this->a5 = $a5;
        $this->a6 = $a6;
        $this->a7 = $a7;
        $this->a8 = $a8;
        $this->a9 = $a9;
    }

    public function getA0()
    {
        return $this->a0;
    }

    public function getA1()
    {
        return $this->a1;
    }

    public function getA2()
    {
        return $this->a2;
    }

    public function getA3()
    {
        return $this->a3;
    }

    public function getA4()
    {
        return $this->a4;
    }

    public function getA5()
    {
        return $this->a5;
    }

    public function getA6()
    {
        return $this->a6;
    }

    public function getA7()
    {
        return $this->a7;
    }

    public function getA8()
    {
        return $this->a8;
    }

    public function getA9()
    {
        return $this->a9;
    }
}