<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update;

/**
 * updateBotByIdData
 */
final class BotByIdData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bot_callback_url',
        'bot_nickname',
        'bot_profile_url',
        'bot_userid',
        'channel_invitation_preference',
        'enable_mark_as_read',
        'is_privacy_mode',
        'show_member',
    ];

    /**
     * Specifies the server URL where bot is located to receive all events, requests, and data forwarded from an application. For security reasons, it is highly recommended that you use an SSL server. The length is limited to 1,024 characters.
     */
    public string $bot_callback_url;
    /**
     * Specifies the bot's nickname. The length is limited to 80 characters.
     */
    public string $bot_nickname;
    /**
     * Specifies the URL of the bot's profile image. The size is limited to 2,048 characters.
     */
    public string $bot_profile_url;
    /**
     * Specifies the ID of the bot to update.
     */
    public string $bot_userid;
    /**
     * Determines whether the bot automatically joins the channel when invited or joins the channel after manually accepting an invitation using the API. If set to 0, it automatically joins the channel. If set to 1, the latter takes place. (Default: 0)
     */
    public int $channel_invitation_preference;
    /**
     * Determines whether to mark the bot's message as read upon sending it. (Default: true)
     */
    public bool $enable_mark_as_read;
    /**
     * In the channels of where the bot is a member, determines whether to only forward the messages with the specific conditions to the bot or forword all messages to the bot, for privacy concerns. If set to true, only messages that start with a '/' or mention the bot_userid are forwarded to the bot. If set to false, all messages are forwarded.
     */
    public bool $is_privacy_mode;
    /**
     * Determines whether to include information about the members of each channel in a callback response. (Default: false)
     */
    public bool $show_member;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot_callback_url' => is_string($value) ? $this->bot_callback_url = $value : parent::assignMember($name, $value),
            'bot_nickname' => is_string($value) ? $this->bot_nickname = $value : parent::assignMember($name, $value),
            'bot_profile_url' => is_string($value) ? $this->bot_profile_url = $value : parent::assignMember($name, $value),
            'bot_userid' => is_string($value) ? $this->bot_userid = $value : parent::assignMember($name, $value),
            'channel_invitation_preference' => is_int($value) ? $this->channel_invitation_preference = $value : parent::assignMember($name, $value),
            'enable_mark_as_read' => is_bool($value) ? $this->enable_mark_as_read = $value : parent::assignMember($name, $value),
            'is_privacy_mode' => is_bool($value) ? $this->is_privacy_mode = $value : parent::assignMember($name, $value),
            'show_member' => is_bool($value) ? $this->show_member = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
