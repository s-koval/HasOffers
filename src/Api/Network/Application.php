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

class Application extends AbstractApi
{
    public $target = 'Application';

    public function addAffiliateTier($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addAffiliateTier');
    }

    public function addHostname($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addHostname');
    }

    public function addOfferCategory($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addOfferCategory');
    }

    public function addOfferGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('addOfferGroup');
    }

    public function changeAdvertiserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('changeAdvertiserApiKey');
    }

    public function changeAffiliateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('changeAffiliateApiKey');
    }

    public function changeNetworkApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('changeNetworkApiKey');
    }

    public function createAdvertiserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createAdvertiserApiKey');
    }

    public function createAffiliateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('createAffiliateApiKey');
    }

    public function decryptUnsubHash($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('decryptUnsubHash');
    }

    public function findAdvertiserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAdvertiserApiKey');
    }

    public function findAdvertiserApiKeyByAdvertiserId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAdvertiserApiKeyByAdvertiserId');
    }

    public function findAffiliateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAffiliateApiKey');
    }

    public function findAffiliateApiKeyByAffiliateId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAffiliateApiKeyByAffiliateId');
    }

    public function findAllAdvertiserApiKeys($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAdvertiserApiKeys');
    }

    public function findAllAffiliateApiKeys($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAffiliateApiKeys');
    }

    public function findAllAffiliateTierAffiliateIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAffiliateTierAffiliateIds');
    }

    public function findAllAffiliateTiers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllAffiliateTiers');
    }

    public function findAllBrowsers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllBrowsers');
    }

    public function findAllCountries($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCountries');
    }

    public function findAllHostnames($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllHostnames');
    }

    public function findAllOfferCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferCategories');
    }

    public function findAllOfferCategoryOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferCategoryOfferIds');
    }

    public function findAllOfferGroupOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferGroupOfferIds');
    }

    public function findAllOfferGroups($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferGroups');
    }

    public function findAllPermissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllPermissions');
    }

    public function findAllRegions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllRegions');
    }

    public function findAllTimezones($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllTimezones');
    }

    public function findBrowserById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findBrowserById');
    }

    public function findCountryByCode($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findCountryByCode');
    }

    public function findPermissionById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPermissionById');
    }

    public function findPermissionByName($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPermissionByName');
    }

    public function findPermissionsByGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPermissionsByGroup');
    }

    public function findTimezoneById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findTimezoneById');
    }

    public function findUserAuthIps($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findUserAuthIps');
    }

    public function generateAllUnsubLinks($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateAllUnsubLinks');
    }

    public function generateUnsubLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateUnsubLink');
    }

    public function getAccountInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAccountInformation');
    }

    public function getActiveOfferCategoryCount($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getActiveOfferCategoryCount');
    }

    public function getNetwork($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getNetwork');
    }

    public function getNetworkInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getNetworkInformation');
    }

    public function getCountryRegions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCountryRegions');
    }

    public function getPoFile($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPoFile');
    }

    public function getTimezone($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTimezone');
    }

    public function importAdvertisers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('importAdvertisers');
    }

    public function importOffers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('importOffers');
    }

    public function resetPassword($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('resetPassword');
    }

    public function updateAccountInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAccountInformation');
    }

    public function updateAdvertiserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAdvertiserApiKey');
    }

    public function updateAffiliateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAffiliateApiKey');
    }

    public function updateAffiliateTier($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAffiliateTier');
    }

    public function updateNetworkEmail($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateNetworkEmail');
    }

    public function updateNetworkHostname($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateNetworkHostname');
    }

    public function updateNetworkJumpHostname($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateNetworkJumpHostname');
    }

    public function updateNetworkJumpHostnameHasSsl($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateNetworkJumpHostnameHasSsl');
    }

    public function updateNetworkNetworkName($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateNetworkNetworkName');
    }

    public function updateHostname($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateHostname');
    }

    public function updateOfferCategory($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateOfferCategory');
    }

    public function updateOfferGroup($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateOfferGroup');
    }

    public function uploadPoFile($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('uploadPoFile');
    }

    public function validAdvertiserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('validAdvertiserApiKey');
    }

    public function validAffiliateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('validAffiliateApiKey');
    }

    public function whitelistNetworkApiIp($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('whitelistNetworkApiIp');
    }
}
