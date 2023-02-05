<?php

namespace App\Services\EVM;

class ABI
{
    protected $abi;

    public function __construct(string $filepath)
    {
        $abiFileData = json_decode(file_get_contents($filepath), true);
        $this->abi = $abiFileData;
    }

    public function getABI()
    {
        return $this->abi['abi'];
    }

    public function getNetworks()
    {
        return $this->abi['networks'];
    }

    public function getContractAddress(string $chainId): string
    {
        return (string)$this->abi['networks'][$chainId]['address'];
    }
}
