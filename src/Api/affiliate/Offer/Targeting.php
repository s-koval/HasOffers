<?php

namespace Grasp\HasOffers\Api\Affiliate\Offer;

use Grasp\AbstractApi;

class Targeting extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'OfferTargeting';

    public function getRuleTargetingForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getRuleTargetingForOffer');
    }
}
