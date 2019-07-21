<?php
namespace App\GraphQl\Type\User;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;

/**
 * Class UserType
 *
 * @package App\GraphQl\Type\User
 */
class UserType extends ObjectType
{
    public function __construct()
    {
        parent::__construct($this->getConfig());
    }

    /** @return array */
    protected function getConfig(): array
    {
        return [
            'name' => 'User',
            'fields' => function () {
                return [
                    'id' => Type::int(),
                    'firstName' => Type::string(),
                    'lastName' => Type::string(),
                ];
            },
            'resolveField' => function ($user, $args, $context, ResolveInfo $info) {
                $method = 'get' . ucfirst($info->fieldName);
                if (method_exists($user, $method)) {
                    return $user->$method();
                }

                return null;
            }
        ];
    }
}
