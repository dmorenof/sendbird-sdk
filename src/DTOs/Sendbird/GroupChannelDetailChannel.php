<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"cover_url":"cover_url","data":"data","custom_type":"custom_type","max_length_message":6,"name":"name","created_at":0,"member_count":1,"channel_url":"channel_url"}
 */
final class GroupChannelDetailChannel extends \Dmorenof\SdkRuntime\DTO
{
    public string $channel_url;
    public string $cover_url;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public int $max_length_message;
    public int $member_count;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'max_length_message' => is_int($value) ? $this->max_length_message = $value : parent::assignMember($name, $value),
            'member_count' => is_int($value) ? $this->member_count = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
