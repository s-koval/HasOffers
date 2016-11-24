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

class Report extends AbstractApi
{
    public $target = 'Report';

    public function getActiveCurrencies($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getActiveCurrencies');
    }

    public function getAffiliateCommissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateCommissions');
    }

    public function getConversions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getConversions');
    }

    public function getManagerCommissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getManagerCommissions');
    }

    public function getModSummaryLogs($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getModSummaryLogs');
    }

    public function getReferrals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getReferrals');
    }

    public function getStats($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getStats');
    }

    public function getSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getSubscriptions');
    }
}
