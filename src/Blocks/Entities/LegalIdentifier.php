<?php

namespace Wearesho\Bobra\Ubki\Blocks\Entities;

use Wearesho\Bobra\Ubki\References;
use Wearesho\Bobra\Ubki\Blocks;

/**
 * Class LegalIdentifier
 * @package Wearesho\Bobra\Ubki\Blocks\Entities
 */
class LegalIdentifier extends Identifier implements Blocks\Interfaces\LegalIdentifier
{
    use Blocks\Traits\LegalIdentifier;

    public function __construct(
        \DateTimeInterface $createdAt,
        References\Language $language,
        string $name,
        ?string $ergpou = null,
        ?int $form = null,
        ?string $economyBranch = null,
        ?string $activityType = null,
        ?\DateTimeInterface $edrRegistrationDate = null,
        ?\DateTimeInterface $taxRegistrationDate = null
    ) {
        $this->ergpou = $ergpou;
        $this->form = $form;
        $this->economyBranch = $economyBranch;
        $this->activityType = $activityType;
        $this->edrRegistrationDate = $edrRegistrationDate;
        $this->taxRegistrationDate = $taxRegistrationDate;

        parent::__construct($createdAt, $language, $name);
    }
}