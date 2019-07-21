<?php
namespace App\Manager\User;

/**
 * Trait UserManagerAwareTrait
 *
 * @package App\Manager\User
 */
trait UserManagerAwareTrait
{
    /** @var UserManager */
    protected $userManager;

    /**
     * Get the value of the property UserManager
     *
     * @return UserManager
     */
    public function getUserManager(): UserManager
    {
        return $this->userManager;
    }

    /**
     * Set the value of the property UserManager
     *
     * @param UserManager $userManager
     *
     * @return $this
     */
    public function setUserManager(UserManager $userManager): self
    {
        $this->userManager = $userManager;

        return $this;
    }
}
