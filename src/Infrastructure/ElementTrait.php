<?php

namespace Wearesho\Bobra\Ubki\Infrastructure;

/**
 * Trait ElementTrait
 * @package Wearesho\Bobra\Ubki\Infrastructure
 */
trait ElementTrait
{
    /**
     * Name of tag
     *
     * @return string
     */
    public function tag(): string
    {
        return static::TAG;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function associativeAttributes(): array
    {
        return [];
    }
}