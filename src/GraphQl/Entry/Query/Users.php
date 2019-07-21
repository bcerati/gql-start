<?php
namespace App\GraphQl\Entry\Query;

use App\GraphQl\Resolver\Query\Users as UsersResolver;
use App\GraphQl\Type\User\UserType;
use App\GraphQl\Type\User\UserTypeTrait;
use GraphQL\Type\Definition\Type;

/**
 * Class Users
 *
 * @package App\GraphQl\Entry\Query
 */
class Users implements QueryEntryInterface
{
    use UserTypeTrait;

    /** @var UsersResolver */
    protected $usersResolver;

    public function __construct(UserType $userType, UsersResolver $usersResolver)
    {
        $this->setUserType($userType);

        $this->usersResolver = $usersResolver;
    }

    /** @inheritdoc */
    public function toArray(): array
    {
        return [
            'type' => Type::listOf($this->getUserType()),
            'args' => [
                'message' => ['type' => Type::string()],
            ],
            'resolve' => $this->usersResolver
        ];
    }

    /** @inheritdoc */
    public function getName(): string
    {
        return 'users';
    }
}
