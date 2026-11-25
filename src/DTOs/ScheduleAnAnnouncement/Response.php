<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\ScheduleAnAnnouncement;

/**
 * Example: {"create_channel_options":{"cover_url":"cover_url","data":"data","custom_type":"custom_type","name":"name","distinct":true},"end_at":6,"enable_push":true,"mark_as_read":true,"target_at":"target_at","unique_id":"unique_id","target_user_count":2,"announcement_group":"announcement_group","sent_channel_count":7,"sent_user_count":9,"scheduled_at":2,"open_count":5,"message":{"message_retention_hour":1,"data":"data","custom_type":"custom_type","user_id":"user_id","type":"type","content":"content"},"priority":"priority","target_channel_count":3,"target_channel_type":"target_channel_type","completed_at":0,"cease_at":"cease_at","resume_at":"resume_at","send_to_frozen_channels":true,"target_custom_type":"target_custom_type","create_channel":true,"open_rate":5.637376656633329,"status":"status"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $announcement_group;
    public string $cease_at;
    /**
     * Format: int64
     */
    public int $completed_at;
    public bool $create_channel;
    public \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestCreateChannelOptions $create_channel_options;
    public bool $enable_push;
    /**
     * Format: int64
     */
    public int $end_at;
    public bool $mark_as_read;
    public \SendbirdSDK\DTOs\ScheduleAnAnnouncement\ResponseMessage $message;
    public int $open_count;
    public float $open_rate;
    public string $priority;
    public string $resume_at;
    /**
     * Format: int64
     */
    public int $scheduled_at;
    public bool $send_to_frozen_channels;
    public int $sent_channel_count;
    public int $sent_user_count;
    public string $status;
    public string $target_at;
    public int $target_channel_count;
    public string $target_channel_type;
    public string $target_custom_type;
    public int $target_user_count;
    public string $unique_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcement_group' => is_string($value) ? $this->announcement_group = $value : parent::assignMember($name, $value),
            'cease_at' => is_string($value) ? $this->cease_at = $value : parent::assignMember($name, $value),
            'completed_at' => is_int($value) ? $this->completed_at = $value : parent::assignMember($name, $value),
            'create_channel' => is_bool($value) ? $this->create_channel = $value : parent::assignMember($name, $value),
            'create_channel_options' => $value instanceof \stdClass ? $this->create_channel_options = new \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestCreateChannelOptions($value) : parent::assignMember($name, $value),
            'enable_push' => is_bool($value) ? $this->enable_push = $value : parent::assignMember($name, $value),
            'end_at' => is_int($value) ? $this->end_at = $value : parent::assignMember($name, $value),
            'mark_as_read' => is_bool($value) ? $this->mark_as_read = $value : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \SendbirdSDK\DTOs\ScheduleAnAnnouncement\ResponseMessage($value) : parent::assignMember($name, $value),
            'open_count' => is_int($value) ? $this->open_count = $value : parent::assignMember($name, $value),
            'open_rate' => is_float($value) ? $this->open_rate = $value : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = $value : parent::assignMember($name, $value),
            'resume_at' => is_string($value) ? $this->resume_at = $value : parent::assignMember($name, $value),
            'scheduled_at' => is_int($value) ? $this->scheduled_at = $value : parent::assignMember($name, $value),
            'send_to_frozen_channels' => is_bool($value) ? $this->send_to_frozen_channels = $value : parent::assignMember($name, $value),
            'sent_channel_count' => is_int($value) ? $this->sent_channel_count = $value : parent::assignMember($name, $value),
            'sent_user_count' => is_int($value) ? $this->sent_user_count = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'target_at' => is_string($value) ? $this->target_at = $value : parent::assignMember($name, $value),
            'target_channel_count' => is_int($value) ? $this->target_channel_count = $value : parent::assignMember($name, $value),
            'target_channel_type' => is_string($value) ? $this->target_channel_type = $value : parent::assignMember($name, $value),
            'target_custom_type' => is_string($value) ? $this->target_custom_type = $value : parent::assignMember($name, $value),
            'target_user_count' => is_int($value) ? $this->target_user_count = $value : parent::assignMember($name, $value),
            'unique_id' => is_string($value) ? $this->unique_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
