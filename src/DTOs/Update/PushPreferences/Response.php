<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\PushPreferences;

/**
 * Example: {"timezone":"timezone","push_blocked_bot_ids":["push_blocked_bot_ids","push_blocked_bot_ids"],"do_not_disturb":true,"enable_push_for_replies":true,"start_min":2,"snooze_end_ts":1,"dnd_schedules":[{"time_windows":[{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9},{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9}],"day_of_week":"monday"},{"time_windows":[{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9},{"end_min":2,"start_hour":7,"end_hour":3,"start_min":9}],"day_of_week":"monday"}],"snooze_enabled":true,"end_min":6,"push_sound":"push_sound","start_hour":5,"snooze_start_ts":5,"push_trigger_option":null,"end_hour":0,"block_push_from_bots":true}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public bool $block_push_from_bots;
    public \SendbirdSDK\Collections\Update\PushPreferences\Response\DndSchedulesCollection $dnd_schedules;
    public bool $do_not_disturb;
    public bool $enable_push_for_replies;
    public int $end_hour;
    public int $end_min;
    public \SendbirdSDK\Collections\StringCollection $push_blocked_bot_ids;
    public string $push_sound;
    public \SendbirdSDK\Enums\Sendbird\PushTriggerOption $push_trigger_option;
    public bool $snooze_enabled;
    /**
     * Format: int64
     */
    public int $snooze_end_ts;
    /**
     * Format: int64
     */
    public int $snooze_start_ts;
    public int $start_hour;
    public int $start_min;
    public string $timezone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'block_push_from_bots' => is_bool($value) ? $this->block_push_from_bots = $value : parent::assignMember($name, $value),
            'dnd_schedules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dnd_schedules = new \SendbirdSDK\Collections\Update\PushPreferences\Response\DndSchedulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Update\PushPreferencesRequestDndSchedulesInner::class)) : parent::assignMember($name, $value),
            'do_not_disturb' => is_bool($value) ? $this->do_not_disturb = $value : parent::assignMember($name, $value),
            'enable_push_for_replies' => is_bool($value) ? $this->enable_push_for_replies = $value : parent::assignMember($name, $value),
            'end_hour' => is_int($value) ? $this->end_hour = $value : parent::assignMember($name, $value),
            'end_min' => is_int($value) ? $this->end_min = $value : parent::assignMember($name, $value),
            'push_blocked_bot_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->push_blocked_bot_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'push_sound' => is_string($value) ? $this->push_sound = $value : parent::assignMember($name, $value),
            'push_trigger_option' => is_string($value) ? $this->push_trigger_option = \SendbirdSDK\Enums\Sendbird\PushTriggerOption::from($value) : parent::assignMember($name, $value),
            'snooze_enabled' => is_bool($value) ? $this->snooze_enabled = $value : parent::assignMember($name, $value),
            'snooze_end_ts' => is_int($value) ? $this->snooze_end_ts = $value : parent::assignMember($name, $value),
            'snooze_start_ts' => is_int($value) ? $this->snooze_start_ts = $value : parent::assignMember($name, $value),
            'start_hour' => is_int($value) ? $this->start_hour = $value : parent::assignMember($name, $value),
            'start_min' => is_int($value) ? $this->start_min = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
