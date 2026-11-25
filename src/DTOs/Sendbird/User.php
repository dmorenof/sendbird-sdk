<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * User
 * Example: {"metadata":"{}","is_active":true,"preferred_languages":["preferred_languages","preferred_languages"],"require_auth_for_profile_image":true,"unread_channel_count":6,"discovery_keys":["discovery_keys","discovery_keys"],"profile_url":"profile_url","is_created":true,"created_at":9,"has_ever_logged_in":true,"locale":"locale","unread_message_count":8,"access_token":"access_token","is_shadow_blocked":true,"user_id":"user_id","nickname":"nickname","phone_number":"phone_number","is_online":true,"state":"","is_hide_me_from_friends":true,"last_seen_at":9}
 */
final class User extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];

    public string $access_token;
    /**
     * Format: int64
     */
    public int $created_at;
    public ?\SendbirdSDK\Collections\StringCollection $discovery_keys;
    public bool $has_ever_logged_in;
    public bool $is_active;
    public bool $is_created;
    public bool $is_hide_me_from_friends;
    public bool $is_online;
    public bool $is_shadow_blocked;
    /**
     * Format: int64
     */
    public int $last_seen_at;
    public string $locale;
    public ?\SendbirdSDK\DTOs\Sendbird\User\MetadataDTO $metadata;
    public ?string $nickname;
    public string $phone_number;
    public ?\SendbirdSDK\Collections\StringCollection $preferred_languages;
    public string $profile_url;
    public bool $require_auth_for_profile_image;
    public ?\SendbirdSDK\Enums\Sendbird\User\StateEnum $state;
    public int $unread_channel_count;
    public int $unread_message_count;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_token' => is_string($value) ? $this->access_token = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'discovery_keys' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->discovery_keys = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'has_ever_logged_in' => is_bool($value) ? $this->has_ever_logged_in = $value : parent::assignMember($name, $value),
            'is_active' => is_bool($value) ? $this->is_active = $value : parent::assignMember($name, $value),
            'is_created' => is_bool($value) ? $this->is_created = $value : parent::assignMember($name, $value),
            'is_hide_me_from_friends' => is_bool($value) ? $this->is_hide_me_from_friends = $value : parent::assignMember($name, $value),
            'is_online' => is_bool($value) ? $this->is_online = $value : parent::assignMember($name, $value),
            'is_shadow_blocked' => is_bool($value) ? $this->is_shadow_blocked = $value : parent::assignMember($name, $value),
            'last_seen_at' => is_int($value) ? $this->last_seen_at = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'phone_number' => is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'preferred_languages' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->preferred_languages = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'profile_url' => is_string($value) ? $this->profile_url = $value : parent::assignMember($name, $value),
            'require_auth_for_profile_image' => is_bool($value) ? $this->require_auth_for_profile_image = $value : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value === null ? null : \SendbirdSDK\Enums\Sendbird\User\StateEnum::from($value) : parent::assignMember($name, $value),
            'unread_channel_count' => is_int($value) ? $this->unread_channel_count = $value : parent::assignMember($name, $value),
            'unread_message_count' => is_int($value) ? $this->unread_message_count = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
