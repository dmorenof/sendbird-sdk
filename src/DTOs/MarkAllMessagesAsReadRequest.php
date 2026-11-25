<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class MarkAllMessagesAsReadRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies an array of one or more group channel URLs where unread messages need to be marked as read. If not specified, unread messages in all group channels a user joined are marked as read.
     */
    public \SendbirdSDK\Collections\StringCollection $channel_urls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->channel_urls = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
