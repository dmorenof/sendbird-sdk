<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\AMessage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message_type',
];

    public string $custom_type;
    public string $data;
    public string $mention_type;
    public \SendbirdSDK\Collections\StringCollection $mentioned_user_ids;
    public string $message;
    public \SendbirdSDK\Enums\Update\AMessage\Request\MessageTypeEnum $message_type;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'mention_type' => is_string($value) ? $this->mention_type = $value : parent::assignMember($name, $value),
            'mentioned_user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mentioned_user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'message_type' => is_string($value) ? $this->message_type = \SendbirdSDK\Enums\Update\AMessage\Request\MessageTypeEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
