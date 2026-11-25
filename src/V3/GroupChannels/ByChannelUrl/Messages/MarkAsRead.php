<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl\Messages;

final class MarkAsRead extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/group_channels/{channel_url}/messages/mark_as_read [operationId: markChannelMessagesAsRead] */
    /**
     * Mark all messages as read
     *
     * ## Mark all messages as read
     *
     * Marks all messages in a group channel as read for a specific user. This action is only applicable for users in a group channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/read-receipts/mark-all-messages-as-read-message#1-mark-all-messages-as-read
     */
    public static function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Messages\MarkAsRead $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Messages\MarkAsRead::class)->put($channel_url, $params);
    }
}
