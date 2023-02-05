<?php

namespace App\Services\EVM;

use Illuminate\Support\Facades\Config;
use App\Services\EVM\ABI;
use App\Services\EVM\EVMNetwork;
use App\Services\EVM\AvatarContract;
use Web3\Contract;

class EVMNetworkService
{
    private $networkData;
    protected ABI $avatarABI;
    protected ABI $orbiter8ABI;
    protected array $avatars;
    protected array $networks;

    public function __construct()
    {
        $this->networkData = Config::get('evm.deployments');

        $this->avatarABI = new ABI(__DIR__.'/abi_json/AvatarControls.json');
        $this->orbiter8ABI = new ABI(__DIR__.'/abi_json/Orbiter8.json');

        $this->loadProviders();
        $this->loadAvatarContracts();
    }

    public function getNetworkData($chainId)
    {
      return $this->networkData[$chainId];
    }

    public function getLoadedAvatarNetworks()
    {
        return array_keys($this->avatars);
    }

    public function getAvatarCount(int $chainId)
    {
        return $this->avatars[$chainId]->getAvatarCount();
    }

    public function getAvatar(int $chainId, int $avatarId)
    {
      return $this->avatars[$chainId]->getAvatarName($avatarId);
    }

    /**
     * Load providers for all chains in config
     */
    private function loadProviders()
    {
        foreach ($this->networkData as $chainId => $data) {
          $this->networks[$chainId] = new EVMNetwork($data);
        }
    }

    /**
     * Load contracts for all contracts in ABI for chains in config
     */
    private function loadAvatarContracts()
    {
        foreach (array_keys($this->avatarABI->getNetworks()) as $chainId) {
            //for each deployed contract that where an RPC url exists
            if (isset($this->networkData[$chainId])) {
                try {
                $this->avatars[$chainId] = new AvatarContract(
                  $this->avatarABI->getContractAddress($chainId),
                  new Contract(
                    $this->networks[$chainId]->getProvider(),
                    $this->avatarABI->getABI()
                  )
                );
                } catch (\Exception $e) {
                  //log something
                }
            }
        }
    }
}
