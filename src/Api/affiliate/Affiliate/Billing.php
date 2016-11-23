<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Affiliate\Affiliate;

use Grasp\AbstractApi;

class Billing extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'AffiliateBilling';

    public function findAllInvoices($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllInvoices');
    }

    public function findAllReceipts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllReceipts');
    }

    public function findInvoiceById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findInvoiceById');
    }

    public function findReceiptById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findReceiptById');
    }

    public function getAccountBalance($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountBalance');
    }

    public function getPayoutTotals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayoutTotals');
    }

    public function updateTaxId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateTaxId');
    }
}
