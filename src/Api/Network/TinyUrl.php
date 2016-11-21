<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class TinyUrl extends AbstractApi
{
    public $target = 'TinyUrl';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function updateRedirect($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateRedirect');
    }
}
