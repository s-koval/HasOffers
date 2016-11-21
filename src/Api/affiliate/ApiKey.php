<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class ApiKey extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'ApiKey';

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
}
