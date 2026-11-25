<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"user_id":"user_id"}
 */
final class MarkChannelMessagesAsReadRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
