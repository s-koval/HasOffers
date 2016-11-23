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

class MenuLink extends AbstractApi
{
    public $target = 'CustomMenuLink';

    public function find($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('find');
    }

    public function findActive($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findActive');
    }
}
