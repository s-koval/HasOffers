<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate;

use Rulerr\AbstractApi;

class Application extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Application';

    public function findAllCountries($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCountries');
    }

    public function findAllHostnames($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllHostnames');
    }

    public function findAllOfferCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferCategories');
    }

    public function findAllTimezones($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllTimezones');
    }
}
