<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird\Message;

/**
 * Example: {"data":"data","message_events":{"update_last_message":true,"update_mention_count":true,"send_push_notification":"send_push_notification","update_unread_count":true},"custom_type":"custom_type","is_reply_to_channel":true,"created_at":7,"is_removed":true,"type":"type","req_id":"req_id","file":"{}","updated_at":3,"translations":"{}","thread_info":"{}","mentioned_users":[{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}],"channel_type":"channel_type","message_survival_seconds":9,"silent":true,"parent_message_id":4,"parent_message_info":{"file":{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4},"custom_type":"custom_type","files":[{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4},{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4}],"message":"message","type":"type","user":{"metadata":"{}","is_active":true,"preferred_languages":["preferred_languages","preferred_languages"],"require_auth_for_profile_image":true,"unread_channel_count":6,"discovery_keys":["discovery_keys","discovery_keys"],"profile_url":"profile_url","is_created":true,"created_at":9,"has_ever_logged_in":true,"locale":"locale","unread_message_count":8,"access_token":"access_token","is_shadow_blocked":true,"user_id":"user_id","nickname":"nickname","phone_number":"phone_number","is_online":true,"state":"","is_hide_me_from_friends":true,"last_seen_at":9},"ts":5},"require_auth":true,"message_id":1,"sorted_metaarray":[{"value":["value","value"],"key":"key"},{"value":["value","value"],"key":"key"}],"mention_type":"mention_type","message":"message","channel_url":"channel_url","is_op_msg":true,"message_retention_hour":6,"extended_message_payload":null,"files":[{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4},{"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4}],"reactions":[{"updated_at":2,"user_ids":["user_ids","user_ids"],"key":"key"},{"updated_at":2,"user_ids":["user_ids","user_ids"],"key":"key"}],"user":{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $channel_type;
    public string $channel_url;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public \SendbirdSDK\DTOs\Sendbird\ExtendedMessagePayload $extended_message_payload;
    public \SendbirdSDK\DTOs\Sendbird\Message\Response\FileDTO $file;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\FilesCollection $files;
    public bool $is_op_msg;
    public bool $is_removed;
    public bool $is_reply_to_channel;
    public string $mention_type;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection $mentioned_users;
    public string $message;
    public \SendbirdSDK\DTOs\Sendbird\MessageResponseMessageEvents $message_events;
    /**
     * Format: int64
     */
    public int $message_id;
    public int $message_retention_hour;
    public int $message_survival_seconds;
    public int $parent_message_id;
    public \SendbirdSDK\DTOs\Sendbird\ParentMessageInfo $parent_message_info;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\ReactionsCollection $reactions;
    public string $req_id;
    public bool $require_auth;
    public bool $silent;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    public \SendbirdSDK\DTOs\Sendbird\Message\Response\ThreadInfoDTO $thread_info;
    public \SendbirdSDK\DTOs\Sendbird\Message\Response\TranslationsDTO $translations;
    public string $type;
    /**
     * Format: int64
     */
    public int $updated_at;
    public \SendbirdSDK\DTOs\Sendbird\BasicUserInfo $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_type' => is_string($value) ? $this->channel_type = $value : parent::assignMember($name, $value),
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'extended_message_payload' => $value instanceof \stdClass ? $this->extended_message_payload = new \SendbirdSDK\DTOs\Sendbird\ExtendedMessagePayload($value) : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \SendbirdSDK\Collections\Sendbird\Message\Response\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\File::class)) : parent::assignMember($name, $value),
            'is_op_msg' => is_bool($value) ? $this->is_op_msg = $value : parent::assignMember($name, $value),
            'is_removed' => is_bool($value) ? $this->is_removed = $value : parent::assignMember($name, $value),
            'is_reply_to_channel' => is_bool($value) ? $this->is_reply_to_channel = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = $value : parent::assignMember($name, $value),
            'mentioned_users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->mentioned_users = new \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\BasicUserInfo::class)) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_events' => $value instanceof \stdClass ? $this->message_events = new \SendbirdSDK\DTOs\Sendbird\MessageResponseMessageEvents($value) : parent::assignMember($name, $value),
            'message_id' => is_int($value) ? $this->message_id = $value : parent::assignMember($name, $value),
            'message_retention_hour' => is_int($value) ? $this->message_retention_hour = $value : parent::assignMember($name, $value),
            'message_survival_seconds' => is_int($value) ? $this->message_survival_seconds = $value : parent::assignMember($name, $value),
            'parent_message_id' => is_int($value) ? $this->parent_message_id = $value : parent::assignMember($name, $value),
            'parent_message_info' => $value instanceof \stdClass ? $this->parent_message_info = new \SendbirdSDK\DTOs\Sendbird\ParentMessageInfo($value) : parent::assignMember($name, $value),
            'reactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reactions = new \SendbirdSDK\Collections\Sendbird\Message\Response\ReactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\Reaction::class)) : parent::assignMember($name, $value),
            'req_id' => is_string($value) ? $this->req_id = $value : parent::assignMember($name, $value),
            'require_auth' => is_bool($value) ? $this->require_auth = $value : parent::assignMember($name, $value),
            'silent' => is_bool($value) ? $this->silent = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'user' => $value instanceof \stdClass ? $this->user = new \SendbirdSDK\DTOs\Sendbird\BasicUserInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
