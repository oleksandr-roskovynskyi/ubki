<?php

namespace Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements;

use Wearesho\Bobra\Ubki;

/**
 * Class DocumentTest
 * @package Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements
 * @coversDefaultClass \Wearesho\Bobra\Ubki\Data\Elements\Document
 * @internal
 */
class DocumentTest extends Ubki\Tests\Unit\Data\TestCase
{
    use Ubki\Tests\Unit\Data\Elements\ArgumentsTrait\Document;

    protected const ELEMENT = Ubki\Data\Elements\Document::class;

    public const CREATED_AT = '2018-03-12';
    public const SERIAL = 'testSerial';
    public const NUMBER = 'testNumber';
    public const ISSUE = 'testIssue';
    public const ISSUE_DATE = '2018-03-14';
    public const TERMIN = '2020-01-01';

    protected function getExpectTag(): string
    {
        return Ubki\Data\Interfaces\Document::TAG;
    }

    protected function attributesNames(): array
    {
        return [
            'createdAt',
            'language',
            'type',
            'serial',
            'number',
            'issue',
            'issueDate',
            'termin'
        ];
    }
}
