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

class Offer extends AbstractApi
{
    public $target = 'Offer';

    public function addApprovalQuestion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addApprovalQuestion');
    }

    public function addCategory($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addCategory');
    }

    public function addGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addGroup');
    }

    public function addTargetBrowser($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addTargetBrowser');
    }

    public function addTargetCountry($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addTargetCountry');
    }

    public function addTargetCountryRegion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addTargetCountryRegion');
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

    public function findAllFeaturedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllFeaturedOfferIds');
    }

    public function findAllIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIds');
    }

    public function findAllIdsByAdvertiserId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByAdvertiserId');
    }

    public function findAllIdsByAffiliateId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllIdsByAffiliateId');
    }

    public function findAllPendingAffiliateApprovals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPendingAffiliateApprovals');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function generateTrackingLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateTrackingLink');
    }

    public function generateTrackingPixel($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateTrackingPixel');
    }

    public function getAffiliateApplicationNote($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateApplicationNote');
    }

    public function getAffiliateApprovalStatus($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateApprovalStatus');
    }

    public function getAffiliateHostnames($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateHostnames');
    }

    /**
     * Gets a summary of payout and revenue-related details for an Affiliate/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayment($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliatePayment');
    }

    /**
     * Get an Affiliate-specific Offer Payout for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayout($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliatePayout');
    }

    /**
     * Get an Affiliate-specific Offer Revenue for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateRevenue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateRevenue');
    }

    /**
     * Get a list of all answers an Affiliate provided for an Offer's signup/approval questions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalAnswers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getApprovalAnswers');
    }

    /**
     * Get Offer Approval/Signup Questions for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalQuestions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getApprovalQuestions');
    }

    public function getApprovedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getApprovedAffiliateIds');
    }

    public function getBlockedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBlockedAffiliateIds');
    }

    public function getCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCategories');
    }

    public function getConversionCaps($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getConversionCaps');
    }

    public function getCustomerList($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCustomerList');
    }

    public function getGroups($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getGroups');
    }

    public function getOfferFiles($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferFiles');
    }

    public function getOfferFilesWithCreativeCode($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferFilesWithCreativeCode');
    }

    public function getOfferListByGroupId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferListByGroupId');
    }

    public function getOfferUrls($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOfferUrls');
    }

    public function getOverview($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getOverview');
    }

    public function getPayouts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayouts');
    }

    public function getPixels($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPixels');
    }

    public function getRevenues($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getRevenues');
    }

    public function getTargetBrowsers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTargetBrowsers');
    }

    public function getTargetCountries($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTargetCountries');
    }

    public function getThumbnail($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getThumbnail');
    }

    public function getTierPayouts($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTierPayouts');
    }

    public function getTierRevenues($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTierRevenues');
    }

    public function getUnapprovedAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUnapprovedAffiliateIds');
    }

    public function removeCategory($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeCategory');
    }

    public function removeConversionCap($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeConversionCap');
    }

    public function removeGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeGroup');
    }

    public function removePayout($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removePayout');
    }

    public function removeRevenue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeRevenue');
    }

    public function removeTargetBrowser($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTargetBrowser');
    }

    public function removeTargetCountry($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTargetCountry');
    }

    public function removeTargetCountryRegion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTargetCountryRegion');
    }

    public function removeTierPayout($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTierPayout');
    }

    public function removeTierRevenue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('removeTierRevenue');
    }

    /**
     * Create an Affiliate's answer to an Offer's signup/approval question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function saveApprovalQuestionAnswer($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('saveApprovalQuestionAnswer');
    }

    public function setAffiliateApproval($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setAffiliateApproval');
    }

    public function setAffiliateHostname($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setAffiliateHostname');
    }

    public function setAffiliateTermsDate($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setAffiliateTermsDate');
    }

    public function setCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setCategories');
    }

    public function setConversionCap($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setConversionCap');
    }

    public function setGroups($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setGroups');
    }

    public function setMultipleAffiliateApprovals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setMultipleAffiliateApprovals');
    }

    public function setPayout($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setPayout');
    }

    public function setRevenue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setRevenue');
    }

    public function setTargetBrowsers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setTargetBrowsers');
    }

    /**
     * Set a list of Countries and/or Regions that an Offer should use for geo-targeting.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTargetCountries($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setTargetCountries');
    }

    /**
     * Sets Affiliate Tier Payout for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierPayout($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setTierPayout');
    }

    /**
     * Sets Affiliate Tier Revenue for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierRevenue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setTierRevenue');
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

    public function updateApprovalQuestion($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateApprovalQuestion');
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
}
