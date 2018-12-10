<?php

namespace Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements;

use Wearesho\Bobra\Ubki;

/**
 * Class ContactTest
 * @package Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements
 * @coversDefaultClass \Wearesho\Bobra\Ubki\Data\Elements\Contact
 * @internal
 */
class ContactTest extends Ubki\Tests\Unit\Data\TestCase
{
    use ArgumentsTrait\Contact;

    protected const ELEMENT = Ubki\Data\Elements\Contact::class;

    public const CREATED_AT = '2018-03-12';
    public const VALUE = 'testValue';
    public const INN = 'testInn';

    protected function getExpectTag(): string
    {
        return Ubki\Data\Interfaces\Contact::TAG;
    }

    protected function attributesNames(): array
    {
        return [
            'createdAt',
            'value',
            'type',
            'inn',
        ];
    }
}
