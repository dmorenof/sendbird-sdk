<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View\NumberOfDailyActiveUsers;

/**
 * Example: {"dau":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public int $dau;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dau' => is_int($value) ? $this->dau = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
