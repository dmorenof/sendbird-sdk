<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"update_last_message":true,"update_mention_count":true,"send_push_notification":"send_push_notification","update_unread_count":true}
 */
final class MessageResponseMessageEvents extends \Dmorenof\SdkRuntime\DTO
{
    public string $send_push_notification;
    public bool $update_last_message;
    public bool $update_mention_count;
    public bool $update_unread_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'send_push_notification' => is_string($value) ? $this->send_push_notification = $value : parent::assignMember($name, $value),
            'update_last_message' => is_bool($value) ? $this->update_last_message = $value : parent::assignMember($name, $value),
            'update_mention_count' => is_bool($value) ? $this->update_mention_count = $value : parent::assignMember($name, $value),
            'update_unread_count' => is_bool($value) ? $this->update_unread_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
