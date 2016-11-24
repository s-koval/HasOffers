<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers;

use Rulerr\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    public function getIdentifier()
    {
        return 'rulerr.hasoffers';
    }
}
