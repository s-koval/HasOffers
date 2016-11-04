<?php

namespace BrianFaust\Grasp\VirusTotal;

use BrianFaust\Grasp\ServiceProvider as AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    protected function getHttpClient()
    {
        return HttpClient::class;
    }
}
