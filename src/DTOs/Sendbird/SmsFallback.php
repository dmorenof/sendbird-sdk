<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"exclude_user_ids":["exclude_user_ids","exclude_user_ids"],"wait_seconds":1}
 */
final class SmsFallback extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\StringCollection $exclude_user_ids;
    public int $wait_seconds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exclude_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->exclude_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'wait_seconds' => is_int($value) ? $this->wait_seconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
