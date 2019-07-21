<?php
namespace App\Entity;

/**
 * Class User
 *
 * @package App\Entity
 */
class User
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /**
     * Get the value of the property Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of the property Id
     *
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of the property FirstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of the property FirstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of the property LastName
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of the property LastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;

        return $this;
    }
}