<?php
namespace App\Api;

use App\GraphQl\Schema;
use GraphQL\GraphQL;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class ApiServer
 *
 * @package App\Api
 */
class Server extends AbstractController
{
    /**
     * @param Request $request
     *
     * @param Schema $schema
     * @return JsonResponse
     *
     * @Route(path="/api")
     */
    public function __invoke(Request $request, Schema $schema)
    {
        /*
         $schema = new Schema([
            'query' => new ObjectType([
                'name' => 'Query',
                'fields' => [
                    'users' => [
                        'type' => Type::listOf(new UserTpe()),
                        'args' => [
                            'message' => ['type' => Type::string()],
                        ],
                        'resolve' => function ($rootValue, $args) {
                            return [(new User())
                                ->setId(1)
                                ->setFirstName('Boris')
                                ->setLastName('Cerati')];
                        }
                    ],
                ],

            ]),
            'mutation' => new ObjectType([
                'name' => 'Calc',
            ]),
        ]);
        */
        $rawInput = $request->getContent();
        $input = json_decode($rawInput, true);

        $query = $input['query'];
        $variableValues = $input['variables'] ?? null;

        $result = GraphQL::executeQuery($schema, $query, null, null, $variableValues);

        return new JsonResponse($result->toArray());
    }
}