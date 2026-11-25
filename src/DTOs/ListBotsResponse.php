<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"next":"next","bots":[{"show_member":true,"enable_mark_as_read":true,"is_privacy_mode":true,"bot_callback_url":"bot_callback_url","bot":{"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_nickname":"bot_nickname","bot_token":"bot_token","bot_require_auth_for_profile_image":true,"ai_agent_type":"ai_agent_type"},"bot_style":{"color":{"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"},"toggle_button_type":"toggle_button_type","toggle_button_url":"toggle_button_url","auto_open":true},"created_at":6,"channel_invitation_preference":0,"first_messages":[{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"},{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"}],"safeguard":{"pii_masking":true,"banned_phrases":["",""],"message":"message","enabled":true}},{"show_member":true,"enable_mark_as_read":true,"is_privacy_mode":true,"bot_callback_url":"bot_callback_url","bot":{"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_nickname":"bot_nickname","bot_token":"bot_token","bot_require_auth_for_profile_image":true,"ai_agent_type":"ai_agent_type"},"bot_style":{"color":{"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"},"toggle_button_type":"toggle_button_type","toggle_button_url":"toggle_button_url","auto_open":true},"created_at":6,"channel_invitation_preference":0,"first_messages":[{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"},{"data":{"suggested_replies":["suggested_replies","suggested_replies"]},"message":"message"}],"safeguard":{"pii_masking":true,"banned_phrases":["",""],"message":"message","enabled":true}}]}
 */
final class ListBotsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\ListBotsResponse\BotsCollection $bots;
    public string $next;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bots' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bots = new \SendbirdSDK\Collections\ListBotsResponse\BotsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\ListBotsResponseBotsInner::class)) : parent::assignMember($name, $value),
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
