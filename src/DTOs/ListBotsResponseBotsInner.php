<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"show_member":true,"enable_mark_as_read":true,"is_privacy_mode":true,"bot_callback_url":"bot_callback_url","bot":{"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_nickname":"bot_nickname","bot_token":"bot_token","bot_require_auth_for_profile_image":true,"ai_agent_type":"ai_agent_type"},"bot_style":{"color":{"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"},"toggle_button_type":"toggle_button_type","toggle_button_url":"toggle_button_url","auto_open":true},"created_at":6,"channel_invitation_preference":0,"first_messages":[{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"},{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"}],"safeguard":{"pii_masking":true,"banned_phrases":["",""],"message":"message","enabled":true}}
 */
final class ListBotsResponseBotsInner extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBot $bot;
    public string $bot_callback_url;
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyle $bot_style;
    public int $channel_invitation_preference;
    /**
     * Format: int64
     */
    public int $created_at;
    public bool $enable_mark_as_read;
    public \SendbirdSDK\Collections\ListBotsResponseBotsInner\FirstMessagesCollection $first_messages;
    public bool $is_privacy_mode;
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerSafeguard $safeguard;
    public bool $show_member;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot' => $value instanceof \stdClass ? $this->bot = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBot($value) : parent::assignMember($name, $value),
            'bot_callback_url' => is_string($value) ? $this->bot_callback_url = $value : parent::assignMember($name, $value),
            'bot_style' => $value instanceof \stdClass ? $this->bot_style = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyle($value) : parent::assignMember($name, $value),
            'channel_invitation_preference' => is_int($value) ? $this->channel_invitation_preference = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'enable_mark_as_read' => is_bool($value) ? $this->enable_mark_as_read = $value : parent::assignMember($name, $value),
            'first_messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->first_messages = new \SendbirdSDK\Collections\ListBotsResponseBotsInner\FirstMessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\ListBotsResponseBotsInnerFirstMessagesInner::class)) : parent::assignMember($name, $value),
            'is_privacy_mode' => is_bool($value) ? $this->is_privacy_mode = $value : parent::assignMember($name, $value),
            'safeguard' => $value instanceof \stdClass ? $this->safeguard = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerSafeguard($value) : parent::assignMember($name, $value),
            'show_member' => is_bool($value) ? $this->show_member = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
