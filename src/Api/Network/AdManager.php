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

class AdManager extends AbstractApi
{
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

    public function findCreativeById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCreativeById');
    }

    public function getActiveNetworkCampaignCount($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getActiveNetworkCampaignCount');
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

    public function getUsage($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUsage');
    }

    public function setCreativeCustomWeights($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setCreativeCustomWeights');
    }

    public function setCreativeWeights($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setCreativeWeights');
    }

    public function updateCampaign($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCampaign');
    }

    public function updateCampaignField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCampaignField');
    }

    public function updateCreative($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCreative');
    }

    public function updateCreativeField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCreativeField');
    }
}
