<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate;

use Rulerr\AbstractApi;

class Affiliate extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Affiliate';

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getAccountBalance($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountBalance');
    }

    public function getAccountManager($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountManager');
    }

    public function getPayoneerSignupUrl($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayoneerSignupUrl');
    }

    public function getReferralCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getReferralCommission');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }

    public function updatePaymentMethodCheck($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodCheck');
    }

    public function updatePaymentMethodDirectDeposit($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodDirectDeposit');
    }

    public function updatePaymentMethodOther($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodOther');
    }

    public function updatePaymentMethodPaypal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodPaypal');
    }

    public function updatePaymentMethodPayQuicker($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodPayQuicker');
    }

    public function updatePaymentMethodWire($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodWire');
    }
}
