<?php
namespace App\Manager\User;

use App\Entity\User;

/**
 * Class UserManager
 *
 * @package App\Manager\User
 */
class UserManager
{
    /**
     * Find all users
     *
     * @return array
     */
    public function findAll(): array
    {
        return [
            (new User())
                ->setId(1)
                ->setFirstName('Boris')
                ->setLastName('Cerati'),

            (new User())
                ->setId(2)
                ->setFirstName('Corentin')
                ->setLastName('Miclo')
        ];
    }
}
