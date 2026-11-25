<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\ChannelInvitationPreference;

/**
 * Example: {"auto_accept":true}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public bool $auto_accept;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'auto_accept' => is_bool($value) ? $this->auto_accept = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
