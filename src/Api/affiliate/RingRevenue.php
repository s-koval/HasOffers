<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class RingRevenue extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'RingRevenue';

    public function createAffiliateLoginUrl($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createAffiliateLoginUrl');
    }
}
