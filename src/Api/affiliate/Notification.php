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

class Notification extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Notification';

    public function clearUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('clearUserSubscriptions');
    }

    public function getUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUserSubscriptions');
    }

    public function replaceUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceUserSubscriptions');
    }
}
