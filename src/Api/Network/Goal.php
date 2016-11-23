<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Goal extends AbstractApi
{
    public $target = 'Goal';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findAllByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByIds');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function generateTracking($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateTracking');
    }

    public function getPayouts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayouts');
    }

    public function getRevenues($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getRevenues');
    }

    public function getTierPayouts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTierPayouts');
    }

    public function getTierRevenues($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTierRevenues');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }
}
