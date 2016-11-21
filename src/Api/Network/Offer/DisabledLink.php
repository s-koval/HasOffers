<?php

namespace Grasp\HasOffers\Api\Network\Offer;

use Grasp\AbstractApi;

class DisabledLink extends AbstractApi
{
    public $target = 'OfferDisabledLink';

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

    public function save($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('save');
    }
}
