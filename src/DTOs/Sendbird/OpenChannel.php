<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"cover_url":"cover_url","metadata":"{}","data":"data","custom_type":"custom_type","is_ephemeral":true,"created_at":0,"is_dynamic_partitioned":true,"channel_url":"channel_url","freeze":true,"participant_count":1,"operators":[{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}],"max_length_message":6,"name":"name"}
 */
final class OpenChannel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel_url',
];

    public string $channel_url;
    public string $cover_url;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public bool $freeze;
    public bool $is_dynamic_partitioned;
    public bool $is_ephemeral;
    public int $max_length_message;
    public ?\SendbirdSDK\DTOs\Sendbird\OpenChannel\MetadataDTO $metadata;
    public string $name;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection $operators;
    public int $participant_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'freeze' => is_bool($value) ? $this->freeze = $value : parent::assignMember($name, $value),
            'is_dynamic_partitioned' => is_bool($value) ? $this->is_dynamic_partitioned = $value : parent::assignMember($name, $value),
            'is_ephemeral' => is_bool($value) ? $this->is_ephemeral = $value : parent::assignMember($name, $value),
            'max_length_message' => is_int($value) ? $this->max_length_message = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operators' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->operators = new \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\BasicUserInfo::class)) : parent::assignMember($name, $value),
            'participant_count' => is_int($value) ? $this->participant_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
