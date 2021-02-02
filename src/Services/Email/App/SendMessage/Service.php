<?php


namespace Services\Email\App\SendMessage;

use Packages\Transport\CustomerIo\SendMessage\Transport;
use Packages\Transport\CustomerIo\SendMessage\TransportDto;

class Service
{
    private Transport $transportService;

    public function send()
    {
        $transportDto = new TransportDto(
            'some',
            'some',
            'some',
            'some',
            'some',
            'some',
            'some',
            'some',
            'some',
            'some',
        );
        $this->transportService->send($transportDto);
    }
}
