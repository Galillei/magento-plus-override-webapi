<?php

namespace MagentoPlus\OverrideWebApi\Test\Functional\WebApi;

class OverrideWebApiTest extends \Magento\TestFramework\TestCase\WebapiAbstract
{
    public function testSetCustomerData()
    {
        $serviceInfo = [
            'rest' => [
                'resourcePath' => '/V1/testwebapi/setcustomerdata/',
                'httpMethod' => \Magento\Framework\Webapi\Rest\Request::HTTP_METHOD_POST,
            ]
        ];
        $requestData = ['data' => ['data', 'test'], 'customerId'=>2];
        $response = $this->_webApiCall($serviceInfo, $requestData);
        $this->assertEquals($response, "This method override method \MagentoPlus\DataBases\Api\TestWebApiInterface::setCustomerData");
    }
}
