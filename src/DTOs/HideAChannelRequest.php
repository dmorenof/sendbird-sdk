<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class HideAChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];

    /**
     * Determines the state and operating behavior of the channel in a channel list. If set to true, the channel is hidden from a user's channel list but it will reappear when there is a new message. If set to false, the channel is hidden from a user's channel list and it will remain hidden unless the value of the property changes to true through [unarchiving](#2-unhide-or-unarchive-a-channel). (Default: true)<br /><br /> When a user who has hidden the channel sends a message in that channel through the [Platform API](/docs/chat/v3/platform-api/guides/messages#2-send-a-message), the `allow_auto_unhide` property is changed to true, making the channel reappear in the channel list.
     */
    public bool $allow_auto_unhide;
    /**
     * When the channel gets appeared back in either the list of the user in the user_id property or the lists of all channel members (should_hide_all = true), determines whether to conceal the messages sent and received before hiding or archiving the channel. (Default: false)<br /><br /> This property is effective only when the value of the [global application settings resource](/docs/chat/v3/platform-api/guides/global-application-settings#-3-resource-representation)'s display_past_message property is false.
     */
    public bool $hide_previous_messages;
    /**
     * Determines whether to make the specified channel disappear from the channel list of all channel members. When this is set to true, the user_id property isn't effective and doesn't need to be specified in the request. (Default: false)
     */
    public bool $should_hide_all;
    /**
     * Specifies the unique ID of the user whose channel will be hidden or archived from the list. This property is required when should_hide_all is set to false, which is the default value. However, when should_hide_all is set to true, this property isn't effective.
     */
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_auto_unhide' => is_bool($value) ? $this->allow_auto_unhide = $value : parent::assignMember($name, $value),
            'hide_previous_messages' => is_bool($value) ? $this->hide_previous_messages = $value : parent::assignMember($name, $value),
            'should_hide_all' => is_bool($value) ? $this->should_hide_all = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
