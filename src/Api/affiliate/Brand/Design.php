<?php

namespace Grasp\HasOffers\Api\Affiliate\Brand;

use Grasp\AbstractApi;

class Design extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'BrandDesign';

    public function getTermsAndConditions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getTermsAndConditions');
    }
}
