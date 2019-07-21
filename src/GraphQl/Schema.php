<?php
namespace App\GraphQl;

use App\GraphQl\Query\QueryInterface;
use GraphQL\Type\Schema as BaseSchema;

/**
 * Class Schema
 *
 * @package App\GraphQl
 */
class Schema extends BaseSchema
{
    /** @var QueryInterface */
    protected $query;

    public function __construct(QueryInterface $query)
    {
        $this->setQuery($query);

        parent::__construct($this->getSchemaConfig());
    }

    /**
     * Build the config array
     *
     * @return array
     */
    protected function getSchemaConfig(): array
    {
        return [
            'query' => $this->getQuery()
        ];
    }

    /** @return QueryInterface */
    public function getQuery(): QueryInterface
    {
        return $this->query;
    }

    /**
     * Set the value of the property Query
     *
     * @param QueryInterface $query
     *
     * @return Schema
     */
    public function setQuery(QueryInterface $query): Schema
    {
        $this->query = $query;

        return $this;
    }
}
