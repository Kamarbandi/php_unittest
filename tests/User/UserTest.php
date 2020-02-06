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
     * @dataProvider userProvider
     */
    public function testAge($age)
    {
        $this->assertEquals($age, $this->user->getAge());
    }

    public function userProvider()
    {
        return [
            [1],
            [5],
            [33],
        ];
    }


}