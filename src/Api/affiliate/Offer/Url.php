<?php

namespace Grasp\HasOffers\Api\Affiliate\Offer;

use Grasp\AbstractApi;

class Url extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'OfferUrl';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }
}
