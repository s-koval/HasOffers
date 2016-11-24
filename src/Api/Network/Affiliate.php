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

class Affiliate extends AbstractApi
{
    public $target = 'Affiliate';

    public function addAccountNote($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addAccountNote');
    }

    public function adjustAffiliateClicks($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('adjustAffiliateClicks');
    }

    public function block($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('block');
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

    public function disableFraudAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('disableFraudAlert');
    }

    public function enableFraudAlert($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('enableFraudAlert');
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

    public function findAllFraudAlerts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllFraudAlerts');
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

    public function findAllPendingUnassignedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPendingUnassignedAffiliateIds');
    }

    public function findAllPendingUnassignedAffiliates($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPendingUnassignedAffiliates');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function findList($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findList');
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

    public function getAffiliateTier($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateTier');
    }

    public function getApprovedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getApprovedOfferIds');
    }

    public function getBlockedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBlockedOfferIds');
    }

    public function getBlockedReasons($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBlockedReasons');
    }

    /**
     * Gets the original/creator Affiliate User for an Affiliate account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCreatorUser($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCreatorUser');
    }

    public function getOfferConversionCaps($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferConversionCaps');
    }

    public function getOfferHostnames($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferHostnames');
    }

    public function getOfferPayouts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferPayouts');
    }

    public function getOfferPayoutsAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferPayoutsAll');
    }

    public function getOfferPixels($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferPixels');
    }

    public function getOwnersAffiliateAccountId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOwnersAffiliateAccountId');
    }

    public function getPaymentMethods($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPaymentMethods');
    }

    public function getReferralAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getReferralAffiliateIds');
    }

    public function getReferralCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getReferralCommission');
    }

    public function getReferringAffiliate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getReferringAffiliate');
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

    public function getUnapprovedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUnapprovedOfferIds');
    }

    public function getUnblockedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUnblockedOfferIds');
    }

    /**
     * Delete a custom Affiliate Referral Commission rate/amount setting for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomReferralCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeCustomReferralCommission');
    }

    /**
     * Set the custom Affiliate Referral Commission amounts/rates for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomReferralCommission($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setCustomReferralCommission');
    }

    public function signup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('signup');
    }

    public function simpleSearch($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('simpleSearch');
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

    public function updateByRefId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateByRefId');
    }

    public function updateField($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateField');
    }

    public function updatePaymentMethodCheck($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodCheck');
    }

    public function updatePaymentMethodDirectDeposit($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodDirectDeposit');
    }

    public function updatePaymentMethodOther($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodOther');
    }

    public function updatePaymentMethodPayoneer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodPayoneer');
    }

    public function updatePaymentMethodPaypal($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodPaypal');
    }

    public function updatePaymentMethodPayQuicker($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodPayQuicker');
    }

    public function updatePaymentMethodWire($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updatePaymentMethodWire');
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
