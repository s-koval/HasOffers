<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class AdManager extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'AdManager';

    public function addCreative($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addCreative');
    }

    public function createCampaign($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createCampaign');
    }

    public function findAllCampaigns($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCampaigns');
    }

    public function findAllCreatives($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCreatives');
    }

    public function findCampaignById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCampaignById');
    }

    public function getCampaignCode($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCampaignCode');
    }

    public function getCampaignCreatives($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCampaignCreatives');
    }

    public function updateCampaign($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCampaign');
    }

    public function updateCreativeField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCreativeField');
    }
}
