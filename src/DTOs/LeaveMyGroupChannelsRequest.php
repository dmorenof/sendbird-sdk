<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class LeaveMyGroupChannelsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $custom_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
