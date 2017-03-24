<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers\Api\Affiliate\Brand;

use Rulerr\AbstractApi;

class Information extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'BrandInformation';

    public function getBrandInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBrandInformation');
    }
}
