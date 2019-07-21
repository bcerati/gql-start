<?php
namespace App\GraphQl\Entry;

/**
 * Interface EntryInterface
 *
 * @package App\GraphQl\Entry
 */
interface EntryInterface
{
    /**
     * Get the name of the entry
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Transform the object into an array
     *
     * @return array
     */
    public function toArray(): array;
}
