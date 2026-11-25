<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View\CountPreferenceOfAChannel;

/**
 * Example: {"count_preference":"false"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Enums\View\CountPreferenceOfAChannel\Response\CountPreferenceEnum $count_preference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count_preference' => is_string($value) ? $this->count_preference = \SendbirdSDK\Enums\View\CountPreferenceOfAChannel\Response\CountPreferenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
