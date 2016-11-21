<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Authentication extends AbstractApi
{
    public $target = 'Authentication';

    public function findUserByCredentials($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUserByCredentials');
    }

    public function findUserByToken($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUserByToken');
    }
}
