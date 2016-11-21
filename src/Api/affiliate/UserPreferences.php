<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class UserPreferences extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'UserPreferences';

    public function setValue($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('setValue');
    }
}
