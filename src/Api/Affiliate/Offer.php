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

class Offer extends AbstractApi
{
    public $type = 'Affiliate';
    public $target = 'Offer';

    public function acceptOfferTermsAndConditions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('acceptOfferTermsAndConditions');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findAllFeaturedOfferIds($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllFeaturedOfferIds');
    }

    public function findByCreativeType($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByCreativeType');
    }

    public function findById($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findById');
    }

    public function findMyOffers($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findMyOffers');
    }

    public function generateTrackingLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateTrackingLink');
    }

    public function getApprovalQuestions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getApprovalQuestions');
    }

    public function getCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getCategories');
    }

    public function getPayoutDetails($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPayoutDetails');
    }

    public function getPixels($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getPixels');
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

    public function requestOfferAccess($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('requestOfferAccess');
    }
}
