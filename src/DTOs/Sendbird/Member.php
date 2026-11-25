<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"metadata":"{}","is_active":true,"is_blocking_me":true,"require_auth_for_profile_image":true,"role":"","profile_url":"profile_url","muted_end_at":2,"delivered_ts":9,"do_not_disturb":true,"is_muted":true,"read_ts":4,"is_blocked_by_me":true,"friend_name":"friend_name","friend_discovery_key":["friend_discovery_key","friend_discovery_key"],"muted_description":"muted_description","push_enabled":true,"user_id":"user_id","nickname":"nickname","is_online":true,"push_trigger_option":null,"state":"","last_seen_at":3}
 */
final class Member extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'user_id',
];

    /**
     * Format: int64
     */
    public int $delivered_ts;
    public bool $do_not_disturb;
    public ?\SendbirdSDK\Collections\StringCollection $friend_discovery_key;
    public ?string $friend_name;
    public bool $is_active;
    public bool $is_blocked_by_me;
    public bool $is_blocking_me;
    public bool $is_muted;
    public bool $is_online;
    /**
     * Format: int64
     */
    public int $last_seen_at;
    public ?\SendbirdSDK\DTOs\Sendbird\Member\MetadataDTO $metadata;
    public string $muted_description;
    /**
     * Format: int64
     */
    public int $muted_end_at;
    public ?string $nickname;
    public string $profile_url;
    public bool $push_enabled;
    public \SendbirdSDK\Enums\Sendbird\PushTriggerOption $push_trigger_option;
    /**
     * Format: int64
     */
    public int $read_ts;
    public bool $require_auth_for_profile_image;
    public ?\SendbirdSDK\Enums\Sendbird\Member\RoleEnum $role;
    public ?\SendbirdSDK\Enums\Sendbird\Member\StateEnum $state;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delivered_ts' => is_int($value) ? $this->delivered_ts = $value : parent::assignMember($name, $value),
            'do_not_disturb' => is_bool($value) ? $this->do_not_disturb = $value : parent::assignMember($name, $value),
            'friend_discovery_key' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->friend_discovery_key = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'friend_name' => $value === null || is_string($value) ? $this->friend_name = $value : parent::assignMember($name, $value),
            'is_active' => is_bool($value) ? $this->is_active = $value : parent::assignMember($name, $value),
            'is_blocked_by_me' => is_bool($value) ? $this->is_blocked_by_me = $value : parent::assignMember($name, $value),
            'is_blocking_me' => is_bool($value) ? $this->is_blocking_me = $value : parent::assignMember($name, $value),
            'is_muted' => is_bool($value) ? $this->is_muted = $value : parent::assignMember($name, $value),
            'is_online' => is_bool($value) ? $this->is_online = $value : parent::assignMember($name, $value),
            'last_seen_at' => is_int($value) ? $this->last_seen_at = $value : parent::assignMember($name, $value),
            'muted_description' => is_string($value) ? $this->muted_description = $value : parent::assignMember($name, $value),
            'muted_end_at' => is_int($value) ? $this->muted_end_at = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'profile_url' => is_string($value) ? $this->profile_url = $value : parent::assignMember($name, $value),
            'push_enabled' => is_bool($value) ? $this->push_enabled = $value : parent::assignMember($name, $value),
            'push_trigger_option' => is_string($value) ? $this->push_trigger_option = \SendbirdSDK\Enums\Sendbird\PushTriggerOption::from($value) : parent::assignMember($name, $value),
            'read_ts' => is_int($value) ? $this->read_ts = $value : parent::assignMember($name, $value),
            'require_auth_for_profile_image' => is_bool($value) ? $this->require_auth_for_profile_image = $value : parent::assignMember($name, $value),
            'role' => $value === null || is_string($value) ? $this->role = $value === null ? null : \SendbirdSDK\Enums\Sendbird\Member\RoleEnum::from($value) : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value === null ? null : \SendbirdSDK\Enums\Sendbird\Member\StateEnum::from($value) : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
