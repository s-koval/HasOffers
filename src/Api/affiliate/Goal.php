<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class Goal extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Goal';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }
}
