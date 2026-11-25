<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"suggested_replies":["suggested_replies","suggested_replies"]}
 */
final class ListBotsResponseBotsInnerFirstMessagesInnerData extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\StringCollection $suggested_replies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'suggested_replies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->suggested_replies = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
