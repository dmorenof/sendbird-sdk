<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\CountPreferenceOfAChannel;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count_preference',
    ];

    public \SendbirdSDK\Enums\Update\CountPreferenceOfAChannel\Request\CountPreferenceEnum $count_preference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count_preference' => is_string($value) ? $this->count_preference = \SendbirdSDK\Enums\Update\CountPreferenceOfAChannel\Request\CountPreferenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
