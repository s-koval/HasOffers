<?php

/*
 * This file is part of Rulerr HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rulerr\HasOffers;

use Rulerr\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    /** @var array */
    protected $options = [
        'base_uri' => 'https://api.hasoffers.com/',
        'headers' => [
           'User-Agent' => 'Rulerr\HasOffers',
        ],
    ];

    /** @var array */
    protected $requestModifiers = [
        Modifiers\AffiliateModifier::class,
        Modifiers\NetworkModifier::class,
    ];
}
