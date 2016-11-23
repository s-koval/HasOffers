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

class Employee extends AbstractApi
{
    public $target = 'Employee';

    public function checkPassword($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('checkPassword');
    }

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

    public function findAllAdvertiserManagers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAdvertiserManagers');
    }

    public function findAllAffiliateManagers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAffiliateManagers');
    }

    public function findAllByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByIds');
    }

    public function findAllByPermission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByPermission');
    }

    public function findAllIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIds');
    }

    public function findAllIdsByPermission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByPermission');
    }

    public function findNetworkOwnerInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findNetworkOwnerInformation');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCommission');
    }

    public function getHOMessage($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getHOMessage');
    }

    public function grantAccess($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('grantAccess');
    }

    public function removeAccess($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeAccess');
    }

    /**
     * Removes the custom Employee Commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeCustomCommission');
    }

    public function resetPassword($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('resetPassword');
    }

    /**
     * Set a custom commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setCustomCommission');
    }

    public function uniqueEmail($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('uniqueEmail');
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
