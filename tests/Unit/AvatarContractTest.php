<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\EVM\AvatarContract;
use Mockery;

class AvatarContractTest extends TestCase
{
    private AvatarContract $avatar;
    private String $fakeAvatarName;
    private int $fakeAvatarId;

    protected function setUp(): void
    {
        $this->fakeAvatarName = "Dingus";


        $mockContract = Mockery::mock('Web3\Contract');
        $mockContract->shouldReceive('at')
          ->once()
          ->andReturn($mockContract);
        $mockContract->shouldReceive('call')
          ->once()
          ->with()
          ->andReturn($this->fakeAvatarName);

        $fakeAddress = '0x0';

        $this->avatar = new AvatarContract(
          $fakeAddress,
          $mockContract
        );
    }

    /**
     * Test getAvatarName.
     *
     * @return void
     */
    public function test_getAvatarName()
    {
        $avatarName = $this->avatar->getAvatarName($this->fakeAvatarId);
        $this->assertEquals($this->fakeAvatarName, $avatarName);
    }
}
