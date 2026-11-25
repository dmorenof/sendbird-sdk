<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send;

final class TextMessageRequestBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
        'message_type',
    ];

    public string $apns_bundle_id;
    public \SendbirdSDK\DTOs\Send\TextMessageRequestBody\AlertOptionsDTO $apple_critical_alert_options;
    /**
     * Format: int64
     */
    public int $created_at;
    public string $custom_type;
    public string $data;
    public string $dedup_id;
    public bool $include_poll_details;
    public bool $is_silent;
    public bool $mark_as_read;
    public \SendbirdSDK\Enums\Send\TextMessageRequestBody\MentionTypeEnum $mention_type;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    public string $message;
    /**
     * Specifies the type of the message. The value of MESG represents a text message.
     */
    public \SendbirdSDK\Enums\Send\TextMessageRequestBody\MessageTypeEnum $message_type;
    public int $poll_id;
    public \SendbirdSDK\DTOs\Send\OneOfTextMessageRequestBodyPushMessageTemplate $push_message_template;
    public bool $send_push;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    public string $sound;
    public float $volume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns_bundle_id' => is_string($value) ? $this->apns_bundle_id = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'include_poll_details' => is_bool($value) ? $this->include_poll_details = $value : parent::assignMember($name, $value),
            'is_silent' => is_bool($value) ? $this->is_silent = $value : parent::assignMember($name, $value),
            'mark_as_read' => is_bool($value) ? $this->mark_as_read = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = \SendbirdSDK\Enums\Send\TextMessageRequestBody\MentionTypeEnum::from($value) : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\Send\TextMessageRequestBody\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'poll_id' => is_int($value) ? $this->poll_id = $value : parent::assignMember($name, $value),
            'send_push' => is_bool($value) ? $this->send_push = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            'sound' => is_string($value) ? $this->sound = $value : parent::assignMember($name, $value),
            'volume' => is_float($value) ? $this->volume = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
