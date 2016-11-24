<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Network;

use Rulerr\AbstractApi;

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
