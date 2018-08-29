<?php

namespace Wearesho\Bobra\Ubki\Blocks\Collections;

use Wearesho\Bobra\Ubki\BaseCollection;
use Wearesho\Bobra\Ubki\Blocks\Interfaces;

/**
 * Class CreditRegisters
 * @package Wearesho\Bobra\Ubki\Blocks\Collections
 */
class CreditRegisters extends BaseCollection
{
    public function type(): string
    {
        return Interfaces\CreditRegister::class;
    }
}
