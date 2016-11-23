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

class Environment extends AbstractApi
{
    public $target = 'Environment';

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findByName($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByName');
    }

    public function getValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getValue');
    }

    public function isEnabled($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('isEnabled');
    }

    public function setValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setValue');
    }
}
