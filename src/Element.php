<?php

namespace Wearesho\Bobra\Ubki;

/**
 * Class Element
 * @package Wearesho\Bobra\Ubki
 * @deprecated @see ElementInterface and ElementTrait
 */
abstract class Element
{
    public const PARENT_TAG = null;
    public const TAG = null;

    final public function tag(): string
    {
        return static::TAG;
    }
}
