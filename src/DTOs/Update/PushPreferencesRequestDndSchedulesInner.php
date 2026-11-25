<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update;

/**
 * Example: {"time_windows":[{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9},{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9}],"day_of_week":"monday"}
 */
final class PushPreferencesRequestDndSchedulesInner extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Enums\Update\PushPreferencesRequestDndSchedulesInner\DayWeekEnum $day_of_week;
    public \SendbirdSDK\Collections\Update\PushPreferencesRequestDndSchedulesInner\TimeWindowsCollection $time_windows;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'day_of_week' => is_string($value) ? $this->day_of_week = \SendbirdSDK\Enums\Update\PushPreferencesRequestDndSchedulesInner\DayWeekEnum::from($value) : parent::assignMember($name, $value),
            'time_windows' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->time_windows = new \SendbirdSDK\Collections\Update\PushPreferencesRequestDndSchedulesInner\TimeWindowsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Update\PushPreferencesRequestDndSchedulesInnerTimeWindowsInner::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
