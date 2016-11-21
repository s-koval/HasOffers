<?php

namespace Grasp\HasOffers\Api\Affiliate\Offer;

use Grasp\AbstractApi;

class File extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'OfferFile';

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

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getCreativeCode($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCreativeCode');
    }
}
