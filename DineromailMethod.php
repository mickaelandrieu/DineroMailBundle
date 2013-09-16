<?php

/**
 * DineromailBundle for Symfony2
 *
 * This Bundle is part of Symfony2 Payment Suite
 *
 * @author David Pujadas <dpujadas@gmail.com>
 * @package DineromailBundle
 *
 * David Pujadas 2013
 */

namespace Dpujadas\DineromailBundle;

use Mmoreram\PaymentCoreBundle\PaymentMethodInterface;


/**
 * DineromailMethod class
 */
class DineromailMethod implements PaymentMethodInterface
{

    /**
     * Get Dineromail method name
     * 
     * @return string Payment name
     */
    public function getPaymentName()
    {
        return 'Dineromail';
    }


    /**
     * @var float
     *
     * Dineromail amount
     */
    private $amount;


    /**
     * set amount
     *
     * @param float $amount Amount
     *
     * @return DineromailMethod self Object
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


    /**
     * Get amount
     *
     * @return float amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

}