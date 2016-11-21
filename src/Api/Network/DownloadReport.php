<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class DownloadReport extends AbstractApi
{
    public $target = 'DownloadReport';

    public function getDownloadReportLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getDownloadReportLink');
    }
}
