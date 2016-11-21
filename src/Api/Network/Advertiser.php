<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Advertiser extends AbstractApi
{
    public $target = 'Advertiser';

    public function addAccountNote($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addAccountNote');
    }

    public function block($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('block');
    }

    public function blockAffiliate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('blockAffiliate');
    }

    public function create($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('create');
    }

    public function createSignupQuestion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createSignupQuestion');
    }

    public function createSignupQuestionAnswer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createSignupQuestionAnswer');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findAllByIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllByIds');
    }

    public function findAllIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIds');
    }

    public function findAllIdsByAccountManagerId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByAccountManagerId');
    }

    public function findAllPendingUnassignedAdvertiserIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPendingUnassignedAdvertiserIds');
    }

    public function findAllPendingUnassignedAdvertisers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPendingUnassignedAdvertisers');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function getAccountBalance($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountBalance');
    }

    public function getAccountManager($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountManager');
    }

    public function getAccountNotes($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountNotes');
    }

    public function getBlockedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBlockedAffiliateIds');
    }

    public function getBlockedReasons($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBlockedReasons');
    }

    public function getCreatorUser($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCreatorUser');
    }

    public function getOverview($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOverview');
    }

    public function getOwnersAdvertiserAccountId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOwnersAdvertiserAccountId');
    }

    public function getSignupAnswers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getSignupAnswers');
    }

    public function getSignupQuestions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getSignupQuestions');
    }

    public function getUnblockedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUnblockedAffiliateIds');
    }

    public function signup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('signup');
    }

    public function unblockAffiliate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('unblockAffiliate');
    }

    public function update($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('update');
    }

    public function updateAccountNote($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAccountNote');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }

    public function updateSignupQuestion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateSignupQuestion');
    }

    public function updateSignupQuestionAnswer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateSignupQuestionAnswer');
    }
}
