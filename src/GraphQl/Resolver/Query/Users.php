<?php
namespace App\GraphQl\Resolver\Query;

use App\Manager\User\UserManagerAwareInterface;
use App\Manager\User\UserManagerAwareTrait;

/**
 * Class Users
 *
 * @package App\GraphQl\Resolver\Query
 */
class Users implements UserManagerAwareInterface
{
    use UserManagerAwareTrait;

    /**
     * @param $rootValue
     * @param $args
     *
     * @return array
     */
    public function __invoke($rootValue, $args): array
    {
        return $this->getUserManager()->findAll();
    }
}
