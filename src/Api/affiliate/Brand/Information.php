<?php

namespace Grasp\HasOffers\Api\Affiliate\Brand;

use Grasp\AbstractApi;

class Information extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'BrandInformation';

    public function getBrandInformation($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getBrandInformation');
    }
}
