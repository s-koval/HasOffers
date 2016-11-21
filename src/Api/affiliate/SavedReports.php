<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class SavedReports extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'SavedReports';

    public function delete($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('delete');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }
}
