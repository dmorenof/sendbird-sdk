<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\ABot;

/**
 * Example: {"show_member":true,"enable_mark_as_read":true,"is_privacy_mode":true,"bot_callback_url":"bot_callback_url","bot":{"feedback":true,"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_nickname":"bot_nickname","bot_token":"bot_token","bot_require_auth_for_profile_image":true,"ai_agent_type":"ai_agent_type"},"bot_style":{"color":{"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"},"toggle_button_type":"toggle_button_type","toggle_button_url":"toggle_button_url","auto_open":true},"created_at":6,"channel_invitation_preference":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bot',
];

    public \SendbirdSDK\DTOs\Create\ABotResponseBot $bot;
    public string $bot_callback_url;
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyle $bot_style;
    public int $channel_invitation_preference;
    /**
     * Format: int64
     */
    public int $created_at;
    public bool $enable_mark_as_read;
    public bool $is_privacy_mode;
    public bool $show_member;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot' => $value instanceof \stdClass ? $this->bot = new \SendbirdSDK\DTOs\Create\ABotResponseBot($value) : parent::assignMember($name, $value),
            'bot_callback_url' => is_string($value) ? $this->bot_callback_url = $value : parent::assignMember($name, $value),
            'bot_style' => $value instanceof \stdClass ? $this->bot_style = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyle($value) : parent::assignMember($name, $value),
            'channel_invitation_preference' => is_int($value) ? $this->channel_invitation_preference = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'enable_mark_as_read' => is_bool($value) ? $this->enable_mark_as_read = $value : parent::assignMember($name, $value),
            'is_privacy_mode' => is_bool($value) ? $this->is_privacy_mode = $value : parent::assignMember($name, $value),
            'show_member' => is_bool($value) ? $this->show_member = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
