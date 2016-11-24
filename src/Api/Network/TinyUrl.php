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

class TinyUrl extends AbstractApi
{
    public $target = 'TinyUrl';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function updateRedirect($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateRedirect');
    }
}
