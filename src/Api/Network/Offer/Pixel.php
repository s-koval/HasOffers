<?php

namespace Grasp\HasOffers\Api\Network\Offer;

use Grasp\AbstractApi;

class Pixel extends AbstractApi
{
    public $target = 'OfferPixel';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
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

    public function getAllowedTypes($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAllowedTypes');
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
