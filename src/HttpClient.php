<?php

namespace BrianFaust\Grasp\VirusTotal;

use BrianFaust\Grasp\AbstractHttpClient;
use BrianFaust\Grasp\VirusTotal\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.virustotal.com/vtapi/v2/',
        'headers' => [
           'User-Agent' => 'VirusTotal-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
