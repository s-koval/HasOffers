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

class DneList extends AbstractApi
{
    public $target = 'DneList';

    public function addEmail($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addEmail');
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

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function findByOfferId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByOfferId');
    }

    public function getEmailListCsv($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getEmailListCsv');
    }

    public function moveDneList($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('moveDneList');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }

    public function upload($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('upload');
    }
}
