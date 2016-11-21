<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Conversion extends AbstractApi
{
    public $target = 'Conversion';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function findAddedConversions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAddedConversions');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findAllByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByIds');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function findUpdatedConversions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUpdatedConversions');
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

    public function updateMeta($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateMeta');
    }

    public function updateStatus($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateStatus');
    }
}
