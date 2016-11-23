<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
