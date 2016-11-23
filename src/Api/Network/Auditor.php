<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Auditor extends AbstractApi
{
    public $target = 'Auditor';

    public function findNetworkDataAudits($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findNetworkDataAudits');
    }
}
