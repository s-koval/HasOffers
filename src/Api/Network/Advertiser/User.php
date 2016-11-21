<?php

namespace Grasp\HasOffers\Api\Network\Advertiser;

use Grasp\AbstractApi;

class User extends AbstractApi
{
    public $target = 'AdvertiserUser';

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

    public function findAllIdsByAdvertiserId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByAdvertiserId');
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
