<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"name":"name"}
 */
final class ChooseAPushNotificationContentTemplateResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
