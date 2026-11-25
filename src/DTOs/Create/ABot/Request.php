<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\ABot;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bot_callback_url',
    'bot_nickname',
    'bot_profile_url',
    'bot_type',
    'bot_userid',
    'is_privacy_mode',
];

    public string $bot_callback_url;
    /**
     * Specifies the bot's nickname. The length is limited to 80 characters.
     */
    public string $bot_nickname;
    public string $bot_profile_url;
    public string $bot_type;
    /**
     * Specifies the unique ID of a bot. The length is limited to 80 characters.
     */
    public string $bot_userid;
    public int $channel_invitation_preference;
    public bool $enable_mark_as_read;
    /**
     * Determines whether to forward all or specific messages to the bot in channels where the bot is a member. If set to true, only messages starting with a "/" or mentioning the bot_userid are forwarded to the bot. If set to false, all messages are forwarded. This property can help protect the privacy of users' chat logs by configuring the bot to only receive messages addressed to the bot.
     */
    public bool $is_privacy_mode;
    public bool $show_member;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot_callback_url' => is_string($value) ? $this->bot_callback_url = $value : parent::assignMember($name, $value),
            'bot_nickname' => is_string($value) ? $this->bot_nickname = $value : parent::assignMember($name, $value),
            'bot_profile_url' => is_string($value) ? $this->bot_profile_url = $value : parent::assignMember($name, $value),
            'bot_type' => is_string($value) ? $this->bot_type = $value : parent::assignMember($name, $value),
            'bot_userid' => is_string($value) ? $this->bot_userid = $value : parent::assignMember($name, $value),
            'channel_invitation_preference' => is_int($value) ? $this->channel_invitation_preference = $value : parent::assignMember($name, $value),
            'enable_mark_as_read' => is_bool($value) ? $this->enable_mark_as_read = $value : parent::assignMember($name, $value),
            'is_privacy_mode' => is_bool($value) ? $this->is_privacy_mode = $value : parent::assignMember($name, $value),
            'show_member' => is_bool($value) ? $this->show_member = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
