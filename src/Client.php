<?php

namespace Grasp\HasOffers;

use Grasp\AbstractClient;

class Client extends AbstractClient
{
    protected function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}
