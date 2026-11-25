<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class ChooseAPushNotificationContentTemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    /**
     * Specifies the name of a template used for notifications. Acceptable values are default and alternative. (Default: default)
     */
    public \SendbirdSDK\Enums\ChooseAPushNotificationContentTemplateRequest\NameEnum $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = \SendbirdSDK\Enums\ChooseAPushNotificationContentTemplateRequest\NameEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
