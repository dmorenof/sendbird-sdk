<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\UserToken;

/**
 * Example: {"expires_at":0,"token":"token"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $expires_at;
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
