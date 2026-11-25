<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\PushPreferencesForAChannel;

/**
 * Example: {"enable":true,"push_sound":"push_sound","push_trigger_option":null}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enable;
    public string $push_sound;
    public \SendbirdSDK\Enums\Sendbird\PushTriggerOption $push_trigger_option;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'push_sound' => is_string($value) ? $this->push_sound = $value : parent::assignMember($name, $value),
            'push_trigger_option' => is_string($value) ? $this->push_trigger_option = \SendbirdSDK\Enums\Sendbird\PushTriggerOption::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
