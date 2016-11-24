<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate\Offer;

use Rulerr\AbstractApi;

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
