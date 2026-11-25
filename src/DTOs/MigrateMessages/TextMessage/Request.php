<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\MigrateMessages\TextMessage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
        'message_type',
        'timestamp',
        'user_id',
    ];

    protected const array VALIDATION = [
        'custom_type' => [
            'maxLength' => 128,
        ],
    ];

    public string $custom_type {
        set {
            $this->assigning('custom_type', $value);
            $this->custom_type = $value;
        }
    }
    public string $data;
    public string $dedup_id;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    public string $message;
    public \SendbirdSDK\Enums\MigrateMessages\TextMessage\Request\MessageTypeEnum $message_type;
    public \SendbirdSDK\Collections\MigrateMessages\TextMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    /**
     * Format: int64
     */
    public int $timestamp;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\MigrateMessages\TextMessage\Request\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
