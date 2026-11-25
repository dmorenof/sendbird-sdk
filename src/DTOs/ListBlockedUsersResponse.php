<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"next":"next","users":[{"metadata":"{}","is_active":true,"preferred_languages":["preferred_languages","preferred_languages"],"require_auth_for_profile_image":true,"unread_channel_count":6,"discovery_keys":["discovery_keys","discovery_keys"],"profile_url":"profile_url","is_created":true,"created_at":9,"has_ever_logged_in":true,"locale":"locale","unread_message_count":8,"access_token":"access_token","is_shadow_blocked":true,"user_id":"user_id","nickname":"nickname","phone_number":"phone_number","is_online":true,"state":"","is_hide_me_from_friends":true,"last_seen_at":9},{"metadata":"{}","is_active":true,"preferred_languages":["preferred_languages","preferred_languages"],"require_auth_for_profile_image":true,"unread_channel_count":6,"discovery_keys":["discovery_keys","discovery_keys"],"profile_url":"profile_url","is_created":true,"created_at":9,"has_ever_logged_in":true,"locale":"locale","unread_message_count":8,"access_token":"access_token","is_shadow_blocked":true,"user_id":"user_id","nickname":"nickname","phone_number":"phone_number","is_online":true,"state":"","is_hide_me_from_friends":true,"last_seen_at":9}]}
 */
final class ListBlockedUsersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $next;
    public \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->users = new \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\User::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
