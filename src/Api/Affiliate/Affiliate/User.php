<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate\Affiliate;

use Rulerr\AbstractApi;

class User extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'AffiliateUser';

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

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getContext($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getContext');
    }

    public function setPermissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setPermissions');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }
}
