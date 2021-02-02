<?php


namespace Services\CustomerIo\App\GetSendMessages;

class Service
{
    /**
     * @return CustomerIoDto[]
     */
    public function get()
    {
        return [
            new CustomerIoDto('a','a','a','a','a','a','a','a','a','a',),
            new CustomerIoDto('b','b','b','b','b','b','b','b','b','b',),
            new CustomerIoDto('c','c','c','c','c','c','c','c','c','c',),
        ];
    }
}