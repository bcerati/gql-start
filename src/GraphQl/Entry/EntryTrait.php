<?php
namespace App\GraphQl\Entry;

use App\GraphQl\Entry\EntryInterface;

/**
 * Trait EntryTrait
 *
 * @package App\GraphQl\Entry
 */
trait EntryTrait
{
    protected $entries = [];

    /**
     * @param EntryInterface[] $entries
     *
     * @return $this
     */
    public function addEntry(EntryInterface...$entries)
    {
        array_push($this->entries, ...$entries);

        return $this;
    }

    /**
     * Get the value of the property $entries
     *
     * @return array
     */
    public function getEntries(): array
    {
        return $this->entries;
    }
}
