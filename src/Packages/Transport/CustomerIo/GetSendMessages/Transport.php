<?php


namespace Packages\Transport\CustomerIo\GetSendMessages;

use Services\CustomerIo\App\GetSendMessages\Service;

class Transport
{
    private Service $customerIoService;

    /**
     * @return TransportDto[]
     */
    public function doIt()
    {
        $customerIoDtos = $this->customerIoService->get();

        $returnList = [];
        foreach ($customerIoDtos as $item) {
            $returnList[] = new TransportDto(
                $item->getB0(),
                $item->getB4(),
                $item->getB0(),
                $item->getB4(),
                $item->getB0(),
                $item->getB4(),
                $item->getB0(),
                $item->getB4(),
                $item->getB0(),
                $item->getB4(),
            );
        }

        return $returnList;
    }
}