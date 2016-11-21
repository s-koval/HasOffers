<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class RingRevenue extends AbstractApi
{
    public $target = 'RingRevenue';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }
}
