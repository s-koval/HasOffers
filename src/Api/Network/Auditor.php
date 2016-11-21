<?php

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
