<?php


namespace Packages\Transport\CustomerIo\SendMessage;

use Services\CustomerIo\App\SendMessage\CustomerIoDto;
use Services\CustomerIo\App\SendMessage\Service;

class Transport
{
    private Service $service;

    public function send(TransportDto $transportDto)
    {
        $customerIoDto = new CustomerIoDto(
            $transportDto->getA0(),
            $transportDto->getA1(),
            $transportDto->getA2(),
            $transportDto->getA3(),
            $transportDto->getA4(),
            $transportDto->getA5(),
            $transportDto->getA6(),
            $transportDto->getA1(),
            $transportDto->getA0(),
            $transportDto->getA0(),
        );
        $this->service->send($customerIoDto);
    }
}