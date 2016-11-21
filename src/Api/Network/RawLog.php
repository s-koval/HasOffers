<?php

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class RawLog extends AbstractApi
{
    public $target = 'RawLog';

    public function getDownloadLink($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getDownloadLink');
    }

    public function getLogExpirations($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getLogExpirations');
    }

    public function listDateDirs($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('listDateDirs');
    }

    public function listLogs($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('listLogs');
    }
}
