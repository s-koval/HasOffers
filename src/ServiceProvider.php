<?php

namespace Grasp\HasOffers;

use Grasp\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    public function getIdentifier()
    {
        return 'grasp.hasoffers';
    }
}
