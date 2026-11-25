<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\ByChannelType\ByChannelUrl\Messages;

final class TotalCount extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/{channel_type}/{channel_url}/messages/total_count [operationId: getTotalNumberOfMessagesInAChannel] */
    /**
     * Get total number of messages in a channel
     *
     * ## Get total number of messages in a channel
     *
     * Retrieves the total number of messages in a specific channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/get-total-number-of-messages-in-a-channel#1-get-total-number-of-messages-in-a-channel
     * ----------------------------
     */
    public static function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\TotalCount $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages\TotalCount $params = null): \SendbirdSDK\DTOs\Get\TotalNumberOfMessagesInAChannel\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages\TotalCount::class)->get($identifier, $params);
    }

}
