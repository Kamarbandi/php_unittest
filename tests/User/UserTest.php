<?php


use PHPUnit\Framework\TestCase;
use App\Models\User;
//include 'src/Classes/Models/User.php';

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new User();
        $this->user->setAge(33);
    }

    protected function tearDown(): void
    {

    }

    /**
     *
     */
    public function testAge()
    {
        $this->assertEquals(33, $this->user->getAge());
    }

    public function testAge2()
    {
        $this->assertEquals(34, $this->user->getAge());
    }
}