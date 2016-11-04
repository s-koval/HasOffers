<?php

namespace BrianFaust\Grasp\VirusTotal\Request\Modifiers;

use BrianFaust\Grasp\Contracts\HttpClient;
use BrianFaust\Grasp\Request\Modifier;

class ApiKeyModifier extends Modifier
{
    public function apply()
    {
        $apiKey = $this->httpClient->getConfig('apiKey');

        $this->httpClient->addQuery('apikey', $apiKey);

        return $this->httpClient;
    }
}
