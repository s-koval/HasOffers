<?php

namespace Grasp\HasOffers;

use Grasp\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    /** @var array */
    protected $options = [
        'base_uri' => 'https://api.hasoffers.com/',
        'headers'  => [
           'User-Agent' => 'Grasp\HasOffers',
        ],
    ];

    /** @var array */
    protected $requestModifiers = [
        Modifiers\AffiliateModifier::class,
        Modifiers\NetworkModifier::class,
    ];
}
