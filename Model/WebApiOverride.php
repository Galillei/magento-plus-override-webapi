<?php

namespace MagentoPlus\OverrideWebApi\Model;

use MagentoPlus\OverrideWebApi\Api\Data\WebApiOverrideInterface;

class WebApiOverride implements WebApiOverrideInterface
{

    /**
     * @param string[] $data
     * @param int $customerId
     * @return string[]
     */
    public function setCustomerData(array $data, int $customerId)
    {
        return 'This method override method \MagentoPlus\DataBases\Api\TestWebApiInterface::setCustomerData';
    }
}
