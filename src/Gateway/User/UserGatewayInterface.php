<?php
namespace App\Gateway\User;

use App\Entity\User;

/**
 * Interface UserGatewayInterface
 *
 * @package App\Gateway\User
 */
interface UserGatewayInterface
{
    /**
     * Find all users
     * @param array $filters
     *
     * @return User[]
     */
    public function findAll(array $filters = []):array;
}