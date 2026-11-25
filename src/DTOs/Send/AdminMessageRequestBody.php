<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send;

final class AdminMessageRequestBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
    'message_type',
];

    public string $apns_bundle_id;
    public string $custom_type;
    public string $data;
    public string $dedup_id;
    public bool $is_silent;
    public \SendbirdSDK\Enums\Send\AdminMessageRequestBody\MentionTypeEnum $mention_type;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    public string $message;
    /**
     * Specifies the type of the message. The value of ADMM represents an admin message.
     */
    public \SendbirdSDK\Enums\Send\AdminMessageRequestBody\MessageTypeEnum $message_type;
    public \SendbirdSDK\DTOs\Send\OneOfTextMessageRequestBodyPushMessageTemplate $push_message_template;
    public bool $send_push;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns_bundle_id' => is_string($value) ? $this->apns_bundle_id = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'is_silent' => is_bool($value) ? $this->is_silent = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = \SendbirdSDK\Enums\Send\AdminMessageRequestBody\MentionTypeEnum::from($value) : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\Send\AdminMessageRequestBody\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'send_push' => is_bool($value) ? $this->send_push = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
