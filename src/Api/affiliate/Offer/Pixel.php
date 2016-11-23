<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Affiliate\Offer;

use Grasp\AbstractApi;

class Pixel extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'OfferPixel';

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

    public function getAllowedTypes($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAllowedTypes');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }
}
