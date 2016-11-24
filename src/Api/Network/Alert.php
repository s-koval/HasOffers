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

class Alert extends AbstractApi
{
    public $target = 'Alert';

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function createAffiliateUserAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createAffiliateUserAlert');
    }

    public function createEmployeeAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createEmployeeAlert');
    }

    public function dismissAffiliateUserAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('dismissAffiliateUserAlert');
    }

    public function dismissAllAffiliateUserAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('dismissAllAffiliateUserAlerts');
    }

    public function dismissAllEmployeeAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('dismissAllEmployeeAlerts');
    }

    public function dismissEmployeeAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('dismissEmployeeAlert');
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

    public function getAffiliateUserAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateUserAlerts');
    }

    public function getEmployeeAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getEmployeeAlerts');
    }

    public function sendToAffiliateUsers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('sendToAffiliateUsers');
    }

    public function sendToEmployees($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('sendToEmployees');
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
