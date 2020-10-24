<?php
namespace App\Security;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\InvalidTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTFailureException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Execute some checking before authenticated an user.
 */
class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        /**
         * @var User $user
         */
        // if ($user->getBan() === true || $user->getVerified() === false) {
        //     throw new JWTFailureException('invalid user', 'Your account is in invalid state. Either it is banned or it have not verify yet.');
        // }
    }

    public function checkPostAuth(UserInterface $user)
    {
        return;
    }
}