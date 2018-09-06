<?php

namespace Wearesho\Bobra\Ubki\Pull;

use Wearesho\Bobra\Ubki\Blocks\Interfaces;
use Wearesho\Bobra\Ubki\Pull\Elements\RequestContent;
use Wearesho\Bobra\Ubki\References\RequestReason;

/**
 * Class Request
 * @package Wearesho\Bobra\Ubki\Pull
 */
class Request implements RequestInterface
{
    /** @var Interfaces\RequestData */
    protected $head;

    /** @var RequestContent */
    protected $body;

    public function __construct(Interfaces\RequestData $requestData, RequestContent $content)
    {
        // todo: wrap into validate() function
        if ($requestData->getReason()->equals(RequestReason::CREDIT_ONLINE())) {
            $identification = $content->getIdentification();

            if (is_null($content->getContacts())
                || is_null($content->getDocuments())
                || is_null($identification->getName())
                || is_null($identification->getPatronymic())
                || is_null($identification->getSurname())
                || is_null($identification->getBirthDate())) {
                throw new \InvalidArgumentException(
                    "Contacts, documents and identification attributes must be not null if reason is CreditOnline"
                );
            }
        }

        $this->head = $requestData;
        $this->body = $content;
    }

    public function jsonSerialize(): array
    {
        return [];
    }

    public function tag(): string
    {
        return RequestInterface::TAG;
    }

    public function getHead(): Interfaces\RequestData
    {
        return $this->head;
    }

    public function getBody(): RequestContent
    {
        return $this->body;
    }
}
