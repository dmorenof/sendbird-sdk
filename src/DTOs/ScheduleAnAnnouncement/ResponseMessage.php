<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\ScheduleAnAnnouncement;

/**
 * Example: {"message_retention_hour":1,"data":"data","custom_type":"custom_type","user_id":"user_id","type":"type","content":"content"}
 */
final class ResponseMessage extends \Dmorenof\SdkRuntime\DTO
{
    public string $content;
    public string $custom_type;
    public string $data;
    public int $message_retention_hour;
    public string $type;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'message_retention_hour' => is_int($value) ? $this->message_retention_hour = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
