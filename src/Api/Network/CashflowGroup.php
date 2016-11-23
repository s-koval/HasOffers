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

class CashflowGroup extends AbstractApi
{
    public $target = 'CashflowGroup';

    public function createCashflowGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createCashflowGroup');
    }

    public function findCashflowGroupById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCashflowGroupById');
    }

    public function findCashflowGroups($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCashflowGroups');
    }

    public function findCashflowGroupUsage($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCashflowGroupUsage');
    }

    public function getCashflowRuleFieldDefinitions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCashflowRuleFieldDefinitions');
    }

    public function getGoalPayoutGroupsForGoal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getGoalPayoutGroupsForGoal');
    }

    public function getGoalRevenueGroupsForGoal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getGoalRevenueGroupsForGoal');
    }

    public function getOfferPayoutGroupsForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferPayoutGroupsForOffer');
    }

    public function getOfferRevenueGroupsForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferRevenueGroupsForOffer');
    }

    public function replaceGoalPayoutGroupsForGoal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceGoalPayoutGroupsForGoal');
    }

    public function replaceGoalRevenueGroupsForGoal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceGoalRevenueGroupsForGoal');
    }

    public function replaceOfferPayoutGroupsForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceOfferPayoutGroupsForOffer');
    }

    public function replaceOfferRevenueGroupsForOffer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceOfferRevenueGroupsForOffer');
    }

    public function updateCashflowGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateCashflowGroup');
    }
}
