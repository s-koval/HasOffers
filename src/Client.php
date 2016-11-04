<?php

namespace BrianFaust\Grasp\VirusTotal;

use BrianFaust\Grasp\AbstractClient;

class Client extends AbstractClient
{
    protected function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}
