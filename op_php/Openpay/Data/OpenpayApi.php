<?php

namespace Openpay\Data;

class OpenpayApi extends OpenpayApiResourceBase
{

    protected $derivedResources = array(
        'Bine' => array(),
        'Customer' => array(),
        'Card' => array(),
        'Charge' => array(),
        'Pse' => array(),
        'Payout' => array(),
        'Fee' => array(),
        'Plan' => array(),
        'Webhook' => array(),
        'Token' => array());

    public static function getInstance($r, $p = null)
    {
        $resourceName = get_class();
        return parent::getInstance($resourceName);
    }

    public function getMerchantInfo()
    {
        return parent::getMerchantInfo();
    }

    protected function getResourceUrlName($p = true)
    {
        return '';
    }

    public function getFullURL()
    {
        return $this->getUrl();
    }

}