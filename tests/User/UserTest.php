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

    public function testAge1()
    {
        $this->assertEquals(33, $this->user->getAge());
        return 3;
    }

    /**
     * @depends testAge1
     */
    public function testAge2($age)
    {
        $this->assertEquals($age, $this->user->getAge());
    }


    public function userProvider()
    {
        return [
            'one' => [1,15],
            'two' => [5, 5],
            'correct' => [33, 56],
        ];
    }


}