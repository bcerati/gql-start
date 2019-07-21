<?php
namespace App\GraphQl\Query;

use App\GraphQl\Entry\EntryInterface;

/**
 * Interface QueryInterface
 *
 * @package App\GraphQl\Query
 */
interface QueryInterface
{
    /**
     * @param EntryInterface[] $entries
     *
     * @return $this
     */
    public function addEntry(EntryInterface...$entries);
}
