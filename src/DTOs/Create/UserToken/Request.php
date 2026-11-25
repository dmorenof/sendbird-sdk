<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\UserToken;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
