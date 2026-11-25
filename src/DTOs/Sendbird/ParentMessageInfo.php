<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"file":{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4},"custom_type":"custom_type","files":[{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4},{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4}],"message":"message","type":"type","user":{"metadata":"{}","is_active":true,"preferred_languages":["preferred_languages","preferred_languages"],"require_auth_for_profile_image":true,"unread_channel_count":6,"discovery_keys":["discovery_keys","discovery_keys"],"profile_url":"profile_url","is_created":true,"created_at":9,"has_ever_logged_in":true,"locale":"locale","unread_message_count":8,"access_token":"access_token","is_shadow_blocked":true,"user_id":"user_id","nickname":"nickname","phone_number":"phone_number","is_online":true,"state":"","is_hide_me_from_friends":true,"last_seen_at":9},"ts":5}
 */
final class ParentMessageInfo extends \Dmorenof\SdkRuntime\DTO
{
    public string $custom_type;
    public \SendbirdSDK\DTOs\Sendbird\File $file;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\FilesCollection $files;
    public string $message;
    /**
     * Format: int64
     */
    public int $ts;
    public string $type;
    public \SendbirdSDK\DTOs\Sendbird\User $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'file' => $value instanceof \stdClass ? $this->file = new \SendbirdSDK\DTOs\Sendbird\File($value) : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \SendbirdSDK\Collections\Sendbird\Message\Response\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\File::class)) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'ts' => is_int($value) ? $this->ts = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'user' => $value instanceof \stdClass ? $this->user = new \SendbirdSDK\DTOs\Sendbird\User($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
