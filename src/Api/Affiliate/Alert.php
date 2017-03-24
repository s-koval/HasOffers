<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate;

use Rulerr\AbstractApi;

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
