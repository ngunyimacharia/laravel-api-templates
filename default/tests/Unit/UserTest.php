<?php

namespace Tests\Unit;

use App\Models\AuthorizedDevice;
use App\Models\LoginHistory;
use App\Models\Profile;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    public function testProfileRelationship()
    {
        factory(Profile::class)->create(['user_id' => $this->user->id]);
        $this->assertNotNull($this->user->profile->id);
    }

    public function testLoginHistoriesRelationship()
    {
        factory(LoginHistory::class)->create(['user_id' => $this->user->id]);
        $this->assertNotNull($this->user->loginHistories);
    }

    public function testAuthorizedDevicesRelationship()
    {
        factory(AuthorizedDevice::class)->create(['user_id' => $this->user->id]);
        $this->assertNotNull($this->user->authorizedDevices);
    }
}
