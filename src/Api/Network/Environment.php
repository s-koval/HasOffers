<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Environment extends AbstractApi
{
    public $target = 'Environment';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findByName($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByName');
    }

    public function getValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getValue');
    }

    public function isEnabled($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('isEnabled');
    }

    public function setValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setValue');
    }
}
