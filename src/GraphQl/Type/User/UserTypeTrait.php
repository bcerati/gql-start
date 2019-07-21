<?php
namespace App\GraphQl\Type\User;

/**
 * Trait UserTypeTrait
 *
 * @package App\GraphQl\Type\User
 */
trait UserTypeTrait
{
    /** @var UserType */
    protected $userType;

    /**
     * Get the value of the property UserType
     *
     * @return UserType
     */
    public function getUserType(): UserType
    {
        return $this->userType;
    }

    /**
     * Set the value of the property UserType
     *
     * @param UserType $userType
     *
     * @return $this
     */
    public function setUserType(UserType $userType): self
    {
        $this->userType = $userType;

        return $this;
    }
}