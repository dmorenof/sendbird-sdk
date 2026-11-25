<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View\NumberOfUnreadMessages;

/**
 * Example: {"unread_count":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public int $unread_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'unread_count' => is_int($value) ? $this->unread_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
