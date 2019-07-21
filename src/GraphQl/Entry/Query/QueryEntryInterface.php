<?php
namespace App\GraphQl\Entry\Query;

use App\GraphQl\Entry\EntryInterface;

/**
 * Interface QueryEntryInterface.
 *
 * Make sure to implement this interface on each query type,
 * it'll add a specific tag on the service definition
 *
 * @package App\GraphQl\Entry\Query
 */
interface QueryEntryInterface extends EntryInterface
{

}
