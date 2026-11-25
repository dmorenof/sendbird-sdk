<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View\NumberOfMonthlyActiveUsers;

/**
 * Example: {"mau":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public int $mau;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mau' => is_int($value) ? $this->mau = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
