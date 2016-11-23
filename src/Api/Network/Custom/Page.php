<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Network\Custom;

use Grasp\AbstractApi;

class Page extends AbstractApi
{
    public $target = 'CustomPage';

    public function find($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('find');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }
}
