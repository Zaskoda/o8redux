<?php

namespace App\Services\EVM;

use Web3\Providers\Provider;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;

class EVMNetwork
{
    protected Provider $provider;
    protected $metadata;
    const TIMEOUT = 20;

    public function __construct($networkData)
    {
        $this->provider = new HttpProvider(
          new HttpRequestManager($networkData['rpc'], self::TIMEOUT)
        );
    }

    public function getProvider()
    {
        return $this->provider;
    }
}