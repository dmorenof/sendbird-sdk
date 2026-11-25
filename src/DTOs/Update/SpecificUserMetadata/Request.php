<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\SpecificUserMetadata;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'value',
    ];

    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
