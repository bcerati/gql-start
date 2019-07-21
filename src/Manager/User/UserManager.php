<?php
namespace App\Manager\User;

use App\Gateway\User\UserGatewayInterface;

/**
 * Class UserManager
 *
 * @package App\Manager\User
 */
class UserManager
{
    /** @var UserGatewayInterface */
    protected $userGateway;

    public function __construct(UserGatewayInterface $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * Find all users
     *
     * @param array $filters
     * @return array
     */
    public function findAll(array $filters = []): array
    {
        return $this->userGateway->findAll($filters);
    }
}
