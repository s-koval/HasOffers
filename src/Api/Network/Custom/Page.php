<?php

namespace Grasp\HasOffers\Api\Network\Custom;

use Grasp\AbstractApi;

class Page extends AbstractApi
{
    public $target = 'CustomPage';

    public function find($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('find');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }
}
