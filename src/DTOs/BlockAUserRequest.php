<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class BlockAUserRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $target_id;
    /**
     * Specifies an array of IDs of all the users to block. This property can be used interchangeably with the users[] property when blocking multiple users at once.
     */
    public \SendbirdSDK\Collections\StringCollection $user_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'target_id' => is_string($value) ? $this->target_id = $value : parent::assignMember($name, $value),
            'user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
