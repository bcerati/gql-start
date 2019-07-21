<?php
namespace App\Gateway\User;

use App\Entity\User;
use App\Gateway\PostgresGateway;

/**
 * Class UserGateway
 *
 * @package App\Gateway\User
 */
class UserPostgresGateway extends PostgresGateway implements UserGatewayInterface
{
    /** @inheritdoc */
    public function findAll(array $filters = []): array
    {
        $this->getConnection();
        return [
            (new User())
                ->setId(1)
                ->setFirstName('Bobo')
                ->setLastName('Cerati'),

            (new User())
                ->setId(2)
                ->setFirstName('Coco')
                ->setLastName('Miclo')
        ];
    }
}