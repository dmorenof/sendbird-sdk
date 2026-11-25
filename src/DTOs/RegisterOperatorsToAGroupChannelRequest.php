<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class RegisterOperatorsToAGroupChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'operator_ids',
];

    public \SendbirdSDK\Collections\StringCollection $operator_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'operator_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->operator_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
