<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"ts_message_offset":0}
 */
final class ResetChatHistoryResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The timestamp in Unix milliseconds indicating the point in time that determines when the user can view messages in a specific channel. Messages sent on or before this timestamp can't be viewed by the user.
     * Format: int64
     */
    public int $ts_message_offset;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ts_message_offset' => is_int($value) ? $this->ts_message_offset = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
