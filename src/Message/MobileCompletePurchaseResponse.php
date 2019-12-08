<?php

namespace Omnipay\AlipayHk\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class MobileCompletePurchaseResponse
 * @package Omnipay\AlipayHk\Message
 */
class MobileCompletePurchaseResponse extends AbstractResponse
{
    public function isPaid()
    {
        return $this->data['is_paid'];
    }


    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return $this->data['is_paid'];
    }
}
