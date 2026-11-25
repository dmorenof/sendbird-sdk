<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class ResetChatHistoryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];

    public bool $reset_all;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reset_all' => is_bool($value) ? $this->reset_all = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
