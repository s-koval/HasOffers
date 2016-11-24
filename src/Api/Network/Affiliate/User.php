<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Network\Affiliate;

use Rulerr\AbstractApi;

class User extends AbstractApi
{
    public $target = 'AffiliateUser';

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

    public function findAllByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByIds');
    }

    public function findAllIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIds');
    }

    public function findAllIdsByAffiliateId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByAffiliateId');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
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

    public function resetPassword($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('resetPassword');
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
