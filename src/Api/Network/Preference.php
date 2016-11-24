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

class Preference extends AbstractApi
{
    public $target = 'Preference';

    public function delete($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('delete');
    }

    public function findAll($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAll');
    }

    public function findByName($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findByName');
    }

    public function findPreferenceByNameTypeAndAccountId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPreferenceByNameTypeAndAccountId');
    }

    public function findPreferenceByNameTypeAndUserId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPreferenceByNameTypeAndUserId');
    }

    public function findPreferencesByTypeAndAccountId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPreferencesByTypeAndAccountId');
    }

    public function findPreferencesByTypeAndUserId($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findPreferencesByTypeAndUserId');
    }

    public function getValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getValue');
    }

    public function isEnabled($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('isEnabled');
    }

    public function setAccountPreference($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setAccountPreference');
    }

    public function setUserPreference($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setUserPreference');
    }

    public function setValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setValue');
    }

    public function updateAllUserPreferences($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateAllUserPreferences');
    }

    public function userPreferenceUpdateTermsAndConditions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('userPreferenceUpdateTermsAndConditions');
    }
}
