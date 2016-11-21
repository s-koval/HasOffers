<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class ScheduledOfferChange extends AbstractApi
{
    public $target = 'ScheduledOfferChange';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function findScheduleById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findScheduleById');
    }

    public function findSchedules($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findSchedules');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }
}
