<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class CustomerList extends AbstractApi
{
    public $target = 'CustomerList';

    public function addCustomerAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addCustomerAttribute');
    }

    public function addListAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addListAttribute');
    }

    public function createList($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createList');
    }

    public function findAllCustomers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCustomers');
    }

    public function findAllLists($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllLists');
    }

    public function findAllListsByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllListsByIds');
    }

    public function findAllSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllSubscriptions');
    }

    public function findCustomerById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCustomerById');
    }

    public function findListById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findListById');
    }

    public function findSubscriptionById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findSubscriptionById');
    }

    public function getListAttributes($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getListAttributes');
    }

    public function removeCustomerAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeCustomerAttribute');
    }

    public function removeListAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeListAttribute');
    }

    public function updateCustomer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCustomer');
    }

    public function updateCustomerAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCustomerAttribute');
    }

    public function updateList($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateList');
    }

    public function updateListAttribute($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateListAttribute');
    }

    public function updateListField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateListField');
    }

    public function updateSubscription($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateSubscription');
    }
}
