<?php

namespace Grasp\HasOffers\Api\Affiliate\Offer;

use Grasp\AbstractApi;

class Pixel extends AbstractApi
{
    public $type = 'Affiliate';

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

    public function getAllowedTypes($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAllowedTypes');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }
}
