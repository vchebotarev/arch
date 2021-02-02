<?php


namespace Services\Email\App\GetSendMessages;


use Packages\Transport\CustomerIo\GetSendMessages\Transport;

class Service
{
    private Transport $transport;

    public function get()
    {
        $this->transport->doIt(); //
    }
}