<?php

namespace Grasp\HasOffers\Modifiers;

use Grasp\Modifiers\AbstractModifier;

class NetworkModifier extends AbstractModifier
{
    private $uri = 'https://api.hasoffers.com/Api/json?Method=';

    public function apply()
    {
        $client = $this->httpClient;

        if ($this->arguments['target'] === 'Network') {
            $client->setOption('base_uri', $this->uri);

            $client->addQuery('Target', $this->arguments['target']);
            $client->addQuery('NetworkToken', $client->getConfig('networkToken'));
            $client->addQuery('NetworkId', $client->getConfig('networkId'));
            $client->addQuery('api_key', $client->getConfig('apiKey'));
        }

        return $client;
    }
}
