<?php

namespace Wearesho\Bobra\Ubki\Pull\Collection;

use Wearesho\BaseCollection;
use Wearesho\Bobra\Ubki;

/**
 * Class Document
 * @package Wearesho\Bobra\Ubki\Pull\Collection
 */
class Documents extends BaseCollection implements Ubki\ElementInterface
{
    use Ubki\ElementTrait;

    public const TAG = 'docs';

    public function type(): string
    {
        return Ubki\Pull\Element\DocumentInterface::class;
    }
}
