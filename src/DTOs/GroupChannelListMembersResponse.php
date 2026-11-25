<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"next":"next","members":[{"metadata":"{}","is_active":true,"is_blocking_me":true,"require_auth_for_profile_image":true,"role":"","profile_url":"profile_url","muted_end_at":2,"delivered_ts":9,"do_not_disturb":true,"is_muted":true,"read_ts":4,"is_blocked_by_me":true,"friend_name":"friend_name","friend_discovery_key":["friend_discovery_key","friend_discovery_key"],"muted_description":"muted_description","push_enabled":true,"user_id":"user_id","nickname":"nickname","is_online":true,"push_trigger_option":null,"state":"","last_seen_at":3},{"metadata":"{}","is_active":true,"is_blocking_me":true,"require_auth_for_profile_image":true,"role":"","profile_url":"profile_url","muted_end_at":2,"delivered_ts":9,"do_not_disturb":true,"is_muted":true,"read_ts":4,"is_blocked_by_me":true,"friend_name":"friend_name","friend_discovery_key":["friend_discovery_key","friend_discovery_key"],"muted_description":"muted_description","push_enabled":true,"user_id":"user_id","nickname":"nickname","is_online":true,"push_trigger_option":null,"state":"","last_seen_at":3}]}
 */
final class GroupChannelListMembersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'members',
    ];

    public \SendbirdSDK\Collections\Sendbird\GroupChannel\MembersCollection $members;
    public string $next;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'members' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->members = new \SendbirdSDK\Collections\Sendbird\GroupChannel\MembersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\Member::class)) : parent::assignMember($name, $value),
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
