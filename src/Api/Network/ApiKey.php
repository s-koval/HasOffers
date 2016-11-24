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

class ApiKey extends AbstractApi
{
    public $target = 'ApiKey';

    public function findApiKeys($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findApiKeys');
    }

    public function generateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateApiKey');
    }

    public function getUserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUserApiKey');
    }

    public function regenerateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('regenerateApiKey');
    }

    public function updateApiKeyStatus($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('updateApiKeyStatus');
    }
}
