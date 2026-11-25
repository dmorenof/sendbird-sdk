<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class FreezeAnOpenChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'freeze',
];

    /**
     * Determines whether to freeze the channel. (Default: true)
     */
    public bool $freeze;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'freeze' => is_bool($value) ? $this->freeze = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
