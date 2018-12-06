<?php

namespace Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements;

use Wearesho\Bobra\Ubki;

/**
 * Class LegalPersonTest
 * @package Wearesho\Bobra\Ubki\Tests\Unit\Data\Elements
 * @coversDefaultClass \Wearesho\Bobra\Ubki\Data\Elements\LegalPerson
 * @internal
 */
class LegalPersonTest extends TestCase
{
    use Ubki\Tests\Unit\Data\Elements\ArgumentsTrait\LegalPerson;

    protected const ELEMENT = Ubki\Data\Elements\LegalPerson::class;

    public const CREATED_AT = '2018-03-12';
    public const NAME = 'testName';
    public const ERGPOU = 'testErgpou';
    public const FORM = 1;
    public const ECONOMY_BRANCH = 'testBranch';
    public const ACTIVITY_TYPE = 'testActivityType';
    public const EDR_REGISTRATION_DATE = '2017-03-12';
    public const TAX_REGISTRATION_DATE = '2016-03-12';

    public function jsonKeys(): array
    {
        return [
            Ubki\Data\Interfaces\IdentifiedPerson::CREATED_AT,
            Ubki\Data\Interfaces\IdentifiedPerson::LANGUAGE,
            Ubki\Data\Interfaces\LegalPerson::NAME,
            Ubki\Data\Interfaces\LegalPerson::ERGPOU,
            Ubki\Data\Interfaces\LegalPerson::FORM,
            Ubki\Data\Interfaces\LegalPerson::ECONOMY_BRANCH,
            Ubki\Data\Interfaces\LegalPerson::ACTIVITY_TYPE,
            Ubki\Data\Interfaces\LegalPerson::EDR_REGISTRATION_DATE,
            Ubki\Data\Interfaces\LegalPerson::TAX_REGISTRATION_DATE,
        ];
    }

    protected function getExpectTag(): string
    {
        return Ubki\Data\Interfaces\LegalPerson::LEGAL_PREFIX . Ubki\Data\Interfaces\LegalPerson::TAG;
    }

    protected function attributesNames(): array
    {
        return [
            'createdAt',
            'language',
            'name',
            'ergpou',
            'form',
            'economyBranch',
            'activityType',
            'edrRegistrationDate',
            'taxRegistrationDate',
        ];
    }
}
