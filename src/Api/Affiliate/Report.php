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

class Report extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Report';

    public function getAffiliateCommissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateCommissions');
    }

    public function getAffiliateReferrals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateReferrals');
    }

    public function getConversions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getConversions');
    }

    public function getStats($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getStats');
    }
}
