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
        $this->user->setEmail('kemerbendiazad@gmail.com');
    }

    protected function tearDown(): void
    {

    }

    /**
     * @dataProvider userProvider
     */
    public function testAge($age, $age2)
    {
        $this->assertEquals($age, $age2);
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