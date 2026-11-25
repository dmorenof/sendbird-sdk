<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\MigrateMessages\FileMessage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message_type',
        'timestamp',
        'url',
        'user_id',
    ];

    protected const array VALIDATION = [
        'custom_type' => [
            'maxLength' => 128,
        ],
    ];

    public string $custom_field;
    public string $custom_type {
        set {
            $this->assigning('custom_type', $value);
            $this->custom_type = $value;
        }
    }
    public string $dedup_id;
    public string $file_name;
    public int $file_size;
    public string $file_type;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    public \SendbirdSDK\Enums\MigrateMessages\FileMessage\Request\MessageTypeEnum $message_type;
    public bool $require_auth;
    public \SendbirdSDK\Collections\MigrateMessages\FileMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    public \SendbirdSDK\Collections\MigrateMessages\FileMessage\Request\ThumbnailsCollection $thumbnails;
    /**
     * Format: int64
     */
    public int $timestamp;
    public string $url;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_field' => is_string($value) ? $this->custom_field = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'dedup_id' => is_string($value) ? $this->dedup_id = $value : parent::assignMember($name, $value),
            'file_name' => is_string($value) ? $this->file_name = $value : parent::assignMember($name, $value),
            'file_size' => is_int($value) ? $this->file_size = $value : parent::assignMember($name, $value),
            'file_type' => is_string($value) ? $this->file_type = $value : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\MigrateMessages\FileMessage\Request\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'require_auth' => is_bool($value) ? $this->require_auth = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
