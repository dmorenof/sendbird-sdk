<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"next":"next","channels":[{"cover_url":"cover_url","metadata":"{}","data":"data","custom_type":"custom_type","is_ephemeral":true,"created_at":0,"is_dynamic_partitioned":true,"channel_url":"channel_url","freeze":true,"participant_count":1,"operators":[{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}],"max_length_message":6,"name":"name"},{"cover_url":"cover_url","metadata":"{}","data":"data","custom_type":"custom_type","is_ephemeral":true,"created_at":0,"is_dynamic_partitioned":true,"channel_url":"channel_url","freeze":true,"participant_count":1,"operators":[{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}],"max_length_message":6,"name":"name"}],"ts":5}
 */
final class ListOpenChannelsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\ListOpenChannelsResponse\ChannelsCollection $channels;
    public string $next;
    /**
     * Format: int64
     */
    public int $ts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channels' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->channels = new \SendbirdSDK\Collections\ListOpenChannelsResponse\ChannelsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\OpenChannel::class)) : parent::assignMember($name, $value),
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'ts' => is_int($value) ? $this->ts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
