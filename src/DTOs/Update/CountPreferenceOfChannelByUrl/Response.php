<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\CountPreferenceOfChannelByUrl;

/**
 * Example: {"count_preference":"false"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Enums\Update\CountPreferenceOfChannelByUrl\Response\CountPreferenceEnum $count_preference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count_preference' => is_string($value) ? $this->count_preference = \SendbirdSDK\Enums\Update\CountPreferenceOfChannelByUrl\Response\CountPreferenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
