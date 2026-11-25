<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View\BotById;

/**
 * Example: {"show_member":true,"enable_mark_as_read":true,"is_privacy_mode":true,"bot_callback_url":"bot_callback_url","bot":{"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_token":"bot_token","bot_nickname":"bot_nickname"},"channel_invitation_preference":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\DTOs\View\BotByIdResponseBot $bot;
    public string $bot_callback_url;
    public int $channel_invitation_preference;
    public bool $enable_mark_as_read;
    public bool $is_privacy_mode;
    public bool $show_member;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot' => $value instanceof \stdClass ? $this->bot = new \SendbirdSDK\DTOs\View\BotByIdResponseBot($value) : parent::assignMember($name, $value),
            'bot_callback_url' => is_string($value) ? $this->bot_callback_url = $value : parent::assignMember($name, $value),
            'channel_invitation_preference' => is_int($value) ? $this->channel_invitation_preference = $value : parent::assignMember($name, $value),
            'enable_mark_as_read' => is_bool($value) ? $this->enable_mark_as_read = $value : parent::assignMember($name, $value),
            'is_privacy_mode' => is_bool($value) ? $this->is_privacy_mode = $value : parent::assignMember($name, $value),
            'show_member' => is_bool($value) ? $this->show_member = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
