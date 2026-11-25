<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send\ABotMessage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel_url',
    'message_type',
];

    /**
     * * This property is available when message_type is FILE.
     */
    public string $apns_bundle_id;
    /**
     * * This property is available when message_type is FILE.
     */
    public \SendbirdSDK\DTOs\Send\ABotMessage\Request\AlertOptionsDTO $apple_critical_alert_options;
    /**
     * Specifies the URL of the channel to send the message to.
     */
    public string $channel_url;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public string $dedup_id;
    public \SendbirdSDK\DTOs\Sendbird\ExtendedMessagePayload $extended_message_payload;
    /**
     * When sending a single file with a message, specifies the data of the file to upload to the Sendbird server in raw binary format. When sending a request containing a file, change the value of the content-type header to multipart/form-data;boundary={your_unique_boundary_string} in the request. * This property is required when message_type is FILE. * This doesn't allow a converted base64-encoded string from a file as its value.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;
    /**
     * * This property is available when message_type is FILE.
     */
    public bool $is_silent;
    public bool $mark_as_read;
    /**
     * * This property is available when message_type is FILE.
     */
    public \SendbirdSDK\Enums\Send\ABotMessage\Request\MentionTypeEnum $mention_type;
    /**
     * * This property is available when message_type is MESG.
     */
    public \SendbirdSDK\Collections\StringCollection $mentioned;
    /**
     * * This property is available when message_type is FILE.
     */
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    /**
     * Specifies the content of the message. * This property is required when message_type is MESG.
     */
    public string $message;
    /**
     * Specifies the type of message to send. MESG for text message, FILE for file message.
     */
    public \SendbirdSDK\Enums\Send\ABotMessage\Request\MessageTypeEnum $message_type;
    /**
     * Determines whether to require an authentication key to verify if the file is being properly accessed. Only the user who uploaded the file or users who are in the channel where the file was uploaded should have access. The authentication key managed internally by the Sendbird system is generated every time a user logs in to the Sendbird server and is valid for three days starting from the last login. If set to false, Sendbird tries to access a file without any key. To access encrypted files, such as the files in the Sendbird server which are by default encrypted, the property must be set to true. (Default: false) The require_auth parameter only works if the file or URL is managed by Sendbird, which means that when you upload files using multipart format or provide URLs that point to the files hosted on the Sendbird server. However, if the file is hosted on a server or service that is not managed by Sendbird, access control and authentication for the file should be handled by the respective server or service hosting the file. * This property is available when message_type is FILE.
     */
    public bool $require_auth;
    public bool $send_push;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    /**
     * * This property is available when message_type is FILE.
     */
    public string $sound;
    /**
     * * This property is available when message_type is FILE.
     */
    public float $volume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns_bundle_id' => is_string($value) ? $this->apns_bundle_id = $value : parent::assignMember($name, $value),
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'extended_message_payload' => $value instanceof \stdClass ? $this->extended_message_payload = new \SendbirdSDK\DTOs\Sendbird\ExtendedMessagePayload($value) : parent::assignMember($name, $value),
            'is_silent' => is_bool($value) ? $this->is_silent = $value : parent::assignMember($name, $value),
            'mark_as_read' => is_bool($value) ? $this->mark_as_read = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = \SendbirdSDK\Enums\Send\ABotMessage\Request\MentionTypeEnum::from($value) : parent::assignMember($name, $value),
            'mentioned' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\Send\ABotMessage\Request\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'require_auth' => is_bool($value) ? $this->require_auth = $value : parent::assignMember($name, $value),
            'send_push' => is_bool($value) ? $this->send_push = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            'sound' => is_string($value) ? $this->sound = $value : parent::assignMember($name, $value),
            'volume' => is_float($value) ? $this->volume = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
