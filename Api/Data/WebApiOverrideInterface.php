<?php


namespace MagentoPlus\OverrideWebApi\Api\Data;


interface WebApiOverrideInterface
{
    /**
     * @param string[] $data
     * @param int $customerId
     * @return string[]
     */
    public function setCustomerData(array $data, int $customerId);
}