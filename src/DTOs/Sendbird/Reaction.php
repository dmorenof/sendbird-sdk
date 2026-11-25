<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"updated_at":2,"user_ids":["user_ids","user_ids"],"key":"key"}
 */
final class Reaction extends \Dmorenof\SdkRuntime\DTO
{
    public string $key;
    /**
     * Format: int64
     */
    public int $updated_at;
    public \SendbirdSDK\Collections\StringCollection $user_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
