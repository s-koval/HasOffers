<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class VatRate extends AbstractApi
{
    public $target = 'VatRate';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function delete($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('delete');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }
}
