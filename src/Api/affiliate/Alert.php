<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class Alert extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Alert';

    public function dismissAffiliateUserAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('dismissAffiliateUserAlert');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getAffiliateUserAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateUserAlerts');
    }
}
