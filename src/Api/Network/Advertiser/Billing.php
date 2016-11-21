<?php

namespace Grasp\HasOffers\Api\Network\Advertiser;

use Grasp\AbstractApi;

class Billing extends AbstractApi
{
    public $target = 'AdvertiserBilling';

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

    public function getNextStartDate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getNextStartDate');
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

    public function updateTaxInfo($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateTaxInfo');
    }
}
