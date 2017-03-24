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
