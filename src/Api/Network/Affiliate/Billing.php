<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Network\Affiliate;

use Rulerr\AbstractApi;

class Billing extends AbstractApi
{
    public $target = 'AffiliateBilling';

    public function addInvoiceItem($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addInvoiceItem');
    }

    public function createInvoice($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createInvoice');
    }

    public function createReceipt($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createReceipt');
    }

    public function findAllInvoices($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllInvoices');
    }

    public function findAllInvoicesByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllInvoicesByIds');
    }

    public function findAllReceipts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllReceipts');
    }

    public function findAllReceiptsByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllReceiptsByIds');
    }

    public function findInvoiceById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findInvoiceById');
    }

    public function findInvoiceStats($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findInvoiceStats');
    }

    public function findLastInvoice($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findLastInvoice');
    }

    public function findLastReceipt($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findLastReceipt');
    }

    public function findReceiptById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findReceiptById');
    }

    public function generateInvoices($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateInvoices');
    }

    public function getAccountBalance($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountBalance');
    }

    public function getAccountHistory($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountHistory');
    }

    public function getNextStartDate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getNextStartDate');
    }

    public function getOutstandingInvoices($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOutstandingInvoices');
    }

    public function getPayoutTotals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayoutTotals');
    }

    public function removeInvoiceItem($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeInvoiceItem');
    }

    public function updateInvoice($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateInvoice');
    }

    public function updateInvoiceField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateInvoiceField');
    }

    public function updateReceipt($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateReceipt');
    }

    public function updateReceiptField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateReceiptField');
    }

    public function updateTaxInfo($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateTaxInfo');
    }
}
