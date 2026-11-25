<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"is_member":true,"state":"invited"}
 */
final class CheckIfMemberResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $is_member;
    public \SendbirdSDK\Enums\CheckIfMemberResponse\StateEnum $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_member' => is_bool($value) ? $this->is_member = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \SendbirdSDK\Enums\CheckIfMemberResponse\StateEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
