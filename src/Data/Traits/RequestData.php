<?php

namespace Wearesho\Bobra\Ubki\Data\Traits;

use Wearesho\Bobra\Ubki;

/**
 * Trait RequestData
 * @package Wearesho\Bobra\Ubki\Data\Traits
 */
trait RequestData
{
    /** @var string */
    protected $version = '1.0';

    /** @var Ubki\Dictionaries\RequestType */
    protected $type;

    /** @var Ubki\Dictionaries\RequestReason */
    protected $reason;

    /** @var \DateTimeInterface|null */
    protected $date;

    /** @var string|null */
    protected $id;

    /** @var Ubki\Dictionaries\RequestInitiator|null */
    protected $initiator;

    public function jsonSerialize(): array
    {
        return [
            Ubki\Data\Interfaces\RequestData::VERSION => $this->version,
            Ubki\Data\Interfaces\RequestData::TYPE => $this->type,
            Ubki\Data\Interfaces\RequestData::REASON => $this->reason,
            Ubki\Data\Interfaces\RequestData::DATE => $this->date,
            Ubki\Data\Interfaces\RequestData::ID => $this->id,
            Ubki\Data\Interfaces\RequestData::INITIATOR => $this->initiator,
        ];
    }

    public function tag(): string
    {
        return Ubki\Data\Interfaces\RequestData::TAG;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getType(): Ubki\Dictionaries\RequestType
    {
        return $this->type;
    }

    public function getReason(): Ubki\Dictionaries\RequestReason
    {
        return $this->reason;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getInitiator(): ?Ubki\Dictionaries\RequestInitiator
    {
        return $this->initiator;
    }
}