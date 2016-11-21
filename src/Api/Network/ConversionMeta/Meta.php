<?php

namespace Grasp\HasOffers\Api\Conversion;

use Grasp\AbstractApi;

class Meta extends AbstractApi
{
    public $target = 'ConversionMeta';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }
}
