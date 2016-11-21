<?php

namespace Grasp\HasOffers\Api\Network\Custom;

use Grasp\AbstractApi;

class MenuLink extends AbstractApi
{
    public $target = 'CustomMenuLink';

    public function find($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('find');
    }

    public function findActive($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findActive');
    }
}
