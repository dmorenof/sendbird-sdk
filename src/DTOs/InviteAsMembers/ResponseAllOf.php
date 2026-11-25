<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\InviteAsMembers;

final class ResponseAllOf extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection $operators;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'operators' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->operators = new \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\User::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
