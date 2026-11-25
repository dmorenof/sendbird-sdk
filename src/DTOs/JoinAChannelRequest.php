<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class JoinAChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'user_id',
];

    /**
     * This property should be specified if the public group channel to join requires an access code to users, which means that the is_access_code_required property of the channel resource is true.
     */
    public ?string $access_code;
    /**
     * Specifies the unique ID of the user to join the public group channel.
     */
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_code' => $value === null || is_string($value) ? $this->access_code = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
