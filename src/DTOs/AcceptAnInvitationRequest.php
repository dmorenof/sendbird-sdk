<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class AcceptAnInvitationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'user_id',
];

    public ?string $access_code;
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
