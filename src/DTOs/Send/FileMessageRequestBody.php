<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send;

final class FileMessageRequestBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'files',
    'message_type',
];

    public string $apns_bundle_id;
    public \SendbirdSDK\DTOs\Send\FileMessageRequestBody\AlertOptionsDTO $apple_critical_alert_options;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public string $dedup_id;
    public \SendbirdSDK\DTOs\Sendbird\File $files;
    public bool $is_silent;
    public bool $mark_as_read;
    public \SendbirdSDK\Enums\Send\FileMessageRequestBody\MentionTypeEnum $mention_type;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    /**
     * Specifies the type of the message. The value of FILE represents a file message.
     */
    public \SendbirdSDK\Enums\Send\FileMessageRequestBody\MessageTypeEnum $message_type;
    /**
     * Determines whether to require an authentication key to verify if the file is being properly accessed. Only the user who uploaded the file or users who are in the channel where the file was uploaded should have access. The authentication key managed internally by the Sendbird system is generated every time a user logs in to the Sendbird server and is valid for three days starting from the last login. If set to false, Sendbird tries to access a file without any key. To access encrypted files, such as the files in the Sendbird server which are by default encrypted, the property must be set to true. (Default: false)
     * The require_auth parameter only works if the file or URL is managed by Sendbird, which means that when you upload files using multipart format or provide URLs that point to the files hosted on the Sendbird server. However, if the file is hosted on a server or service that is not managed by Sendbird, access control and authentication for the file should be handled by the respective server or service hosting the file.
     */
    public bool $require_auth;
    public bool $send_push;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    public string $sound;
    public string $thumbnail1;
    public string $thumbnail2;
    public string $thumbnail3;
    public \SendbirdSDK\Collections\StringCollection $thumbnails;
    public float $volume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns_bundle_id' => is_string($value) ? $this->apns_bundle_id = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'files' => $value instanceof \stdClass ? $this->files = new \SendbirdSDK\DTOs\Sendbird\File($value) : parent::assignMember($name, $value),
            'is_silent' => is_bool($value) ? $this->is_silent = $value : parent::assignMember($name, $value),
            'mark_as_read' => is_bool($value) ? $this->mark_as_read = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = \SendbirdSDK\Enums\Send\FileMessageRequestBody\MentionTypeEnum::from($value) : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\Send\FileMessageRequestBody\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'require_auth' => is_bool($value) ? $this->require_auth = $value : parent::assignMember($name, $value),
            'send_push' => is_bool($value) ? $this->send_push = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            'sound' => is_string($value) ? $this->sound = $value : parent::assignMember($name, $value),
            'thumbnail1' => is_string($value) ? $this->thumbnail1 = $value : parent::assignMember($name, $value),
            'thumbnail2' => is_string($value) ? $this->thumbnail2 = $value : parent::assignMember($name, $value),
            'thumbnail3' => is_string($value) ? $this->thumbnail3 = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'volume' => is_float($value) ? $this->volume = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
