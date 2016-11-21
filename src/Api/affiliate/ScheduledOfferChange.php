<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class ScheduledOfferChange extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'ScheduledOfferChange';

    public function findSchedules($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findSchedules');
    }
}
