<?php
namespace App\Manager\User;

/**
 * Interface UserManagerAwareInterface
 *
 * @package App\Manager\User
 */
interface UserManagerAwareInterface
{
    /** @return UserManager */
    public function getUserManager(): UserManager;
}
