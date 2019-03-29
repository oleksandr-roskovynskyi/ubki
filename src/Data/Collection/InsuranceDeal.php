<?php

namespace Wearesho\Bobra\Ubki\Data\Collection;

use Wearesho\BaseCollection;
use Wearesho\Bobra\Ubki\Data;

/**
 * Class InsuranceDeal
 * @package Wearesho\Bobra\Ubki\Data\Collection
 */
class InsuranceDeal extends BaseCollection
{
    public function type(): string
    {
        return Data\InsuranceDeal::class;
    }
}
