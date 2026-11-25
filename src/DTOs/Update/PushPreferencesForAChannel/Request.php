<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\PushPreferencesForAChannel;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'push_trigger_option',
];

    public string $push_sound;
    /**
     * The type of notifications trigger applies to group channels when a user is disconnected from Sendbird server. Acceptable values are the following: - default (default): Indicates that a user's notifications trigger setting applies to the specified channel. - all: Indicates that a user receives notifications for all new messages. - mention_only: Indicates that a user only receives notifications for mentioned messages. - off: Indicates that a user doesn't receive any notifications.
     */
    public \SendbirdSDK\Enums\Update\PushPreferencesForAChannel\Request\TriggerOptionEnum $push_trigger_option;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'push_sound' => is_string($value) ? $this->push_sound = $value : parent::assignMember($name, $value),
            'push_trigger_option' => is_string($value) ? $this->push_trigger_option = \SendbirdSDK\Enums\Update\PushPreferencesForAChannel\Request\TriggerOptionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
