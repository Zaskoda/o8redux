<?php

namespace App\Services\EVM;

use Web3\Contract;

class AvatarContract
{

  protected $contract;
  protected string $address;

  public function __construct(string $address, Contract $contract)
  {
      $this->address = $address;
      $this->contract = $contract;
  }

  public function getAvatarName($avatarId)
  {
      $name = null;
      $this->contract->at($this->address)->call(
          'getAvatarNameById',
          $avatarId,
          function ($err, $results) use (&$name) {
          if ($err !== null) {
            echo $err->getMessage() . PHP_EOL;
          }
          if (isset($results[0])) {
              $name = $results[0];
          }
      });
      return $name;
  }

  public function getAvatarCount()
  {
      $count = null;
      $this->contract->at($this->address)->call(
          'getAvatarCount',
          '',
          function ($err, $results) use (&$count) {
          if ($err !== null) {
            echo $err->getMessage() . PHP_EOL;
          }
          if (isset($results[0])) {
            $count = $results[0];
          }
      });
      return (string) $count;
  }
}
