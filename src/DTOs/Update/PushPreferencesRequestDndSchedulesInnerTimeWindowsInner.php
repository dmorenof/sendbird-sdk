<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update;

/**
 * Example: {"end_min":2,"start_hour":7,"end_hour":3,"start_min":9}
 */
final class PushPreferencesRequestDndSchedulesInnerTimeWindowsInner extends \Dmorenof\SdkRuntime\DTO
{
    public int $end_hour;
    public int $end_min;
    public int $start_hour;
    public int $start_min;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_hour' => is_int($value) ? $this->end_hour = $value : parent::assignMember($name, $value),
            'end_min' => is_int($value) ? $this->end_min = $value : parent::assignMember($name, $value),
            'start_hour' => is_int($value) ? $this->start_hour = $value : parent::assignMember($name, $value),
            'start_min' => is_int($value) ? $this->start_min = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
