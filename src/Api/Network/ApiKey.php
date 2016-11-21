<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

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
