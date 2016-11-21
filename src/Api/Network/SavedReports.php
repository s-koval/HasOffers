<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class SavedReports extends AbstractApi
{
    public $target = 'SavedReports';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function delete($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('delete');
    }

    public function findByHash($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByHash');
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
