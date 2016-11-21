<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class Application extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Application';

    public function findAllCountries($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllCountries');
    }

    public function findAllHostnames($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllHostnames');
    }

    public function findAllOfferCategories($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllOfferCategories');
    }

    public function findAllTimezones($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('findAllTimezones');
    }
}
