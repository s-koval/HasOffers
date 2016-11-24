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

class Authentication extends AbstractApi
{
    public $target = 'Authentication';

    public function findUserByCredentials($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUserByCredentials');
    }

    public function findUserByToken($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUserByToken');
    }
}
