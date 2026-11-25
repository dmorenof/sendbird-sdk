<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"}
 */
final class ListBotsResponseBotsInnerFirstMessagesInner extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerFirstMessagesInnerData $data;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerFirstMessagesInnerData($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
