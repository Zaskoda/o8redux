<?php

namespace App\Services\EVMDB;

use App\Services\EVM\EVMNetworkService;
use App\Models\EVMNetwork;
use App\Models\Avatar;

class EVMDBService
{
  protected $evmNet;

  public function __construct(EVMNetworkService $evmNet)
  {
    $this->evmNet = $evmNet;
  }

  public function update()
  {
      foreach ($this->evmNet->getLoadedAvatarNetworks() as $chainId) {
          $data = $this->evmNet->getNetworkData($chainId);
          EVMNetwork::updateOrCreate([
                  'chain_id' => $chainId
              ], [
              'chain_id' => $chainId,
              'name' => $data['name'],
              'short_name' => $data['shortName'],
              'description' => $data['description'],
              'active' => true,
          ]);
          $count = $this->evmNet->getAvatarCount($chainId);
          for ($i = 0; $i < $count; $i++ ) {
                $avatar = $this->evmNet->getAvatar($chainId, $i);
                if ($avatar != null) {
                    Avatar::updateOrCreate([
                        'chain_id' => $chainId,
                        'avatar_id' => $i
                    ], [
                        'chain_id' => $chainId,
                        'avatar_id' => $i,
                        'name' => $avatar
                    ]);
                }
            }
        }
    }
}
