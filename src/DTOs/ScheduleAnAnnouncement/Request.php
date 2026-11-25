<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\ScheduleAnAnnouncement;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public string $announcement_group;
    public bool $assign_sender_as_channel_inviter;
    public string $cease_at;
    public bool $create_channel;
    public \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestCreateChannelOptions $create_channel_options;
    public bool $enable_push;
    /**
     * Format: int64
     */
    public int $end_at;
    public bool $keep_channel_hidden_for_sender;
    public bool $mark_as_read;
    public \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestMessage $message;
    public string $resume_at;
    /**
     * Format: int64
     */
    public int $scheduled_at;
    public bool $send_to_frozen_channels;
    public string $target_at;
    public string $target_channel_type;
    public string $target_custom_type;
    public \SendbirdSDK\Collections\StringCollection $target_list;
    public string $unique_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcement_group' => is_string($value) ? $this->announcement_group = $value : parent::assignMember($name, $value),
            'assign_sender_as_channel_inviter' => is_bool($value) ? $this->assign_sender_as_channel_inviter = $value : parent::assignMember($name, $value),
            'cease_at' => is_string($value) ? $this->cease_at = $value : parent::assignMember($name, $value),
            'create_channel' => is_bool($value) ? $this->create_channel = $value : parent::assignMember($name, $value),
            'create_channel_options' => $value instanceof \stdClass ? $this->create_channel_options = new \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestCreateChannelOptions($value) : parent::assignMember($name, $value),
            'enable_push' => is_bool($value) ? $this->enable_push = $value : parent::assignMember($name, $value),
            'end_at' => is_int($value) ? $this->end_at = $value : parent::assignMember($name, $value),
            'keep_channel_hidden_for_sender' => is_bool($value) ? $this->keep_channel_hidden_for_sender = $value : parent::assignMember($name, $value),
            'mark_as_read' => is_bool($value) ? $this->mark_as_read = $value : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \SendbirdSDK\DTOs\ScheduleAnAnnouncement\RequestMessage($value) : parent::assignMember($name, $value),
            'resume_at' => is_string($value) ? $this->resume_at = $value : parent::assignMember($name, $value),
            'scheduled_at' => is_int($value) ? $this->scheduled_at = $value : parent::assignMember($name, $value),
            'send_to_frozen_channels' => is_bool($value) ? $this->send_to_frozen_channels = $value : parent::assignMember($name, $value),
            'target_at' => is_string($value) ? $this->target_at = $value : parent::assignMember($name, $value),
            'target_channel_type' => is_string($value) ? $this->target_channel_type = $value : parent::assignMember($name, $value),
            'target_custom_type' => is_string($value) ? $this->target_custom_type = $value : parent::assignMember($name, $value),
            'target_list' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->target_list = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'unique_id' => is_string($value) ? $this->unique_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
