<?php
/**
 * Created by PhpStorm.
 * User: Catman
 * Date: 2018. 09. 22.
 * Time: 19:40
 */

namespace App\Security;


use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class ExampleVoter implements VoterInterface
{
    public function vote(TokenInterface $token, $subject, array $attributes)
    {
        // TODO: Implement vote() method.
    }

}