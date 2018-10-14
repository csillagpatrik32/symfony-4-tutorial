<?php
/**
 * Created by PhpStorm.
 * User: Catman
 * Date: 2018. 10. 14.
 * Time: 0:00
 */

namespace App\Tests\Security;

use App\Security\TokenGenerator;
use PHPUnit\Framework\TestCase;

class TokenGeneratorTest extends TestCase
{
    public function testTokenGeneration()
    {
        $tokenGen = new TokenGenerator();
        $token = $tokenGen->getRandomSecureToken(30);
        /*$token[15] = '*';*/
        echo $token;

        $this->assertEquals(30, strlen($token));
        $this->assertTrue(ctype_alnum($token), 'Token contains incorrect characters.');
    }
}