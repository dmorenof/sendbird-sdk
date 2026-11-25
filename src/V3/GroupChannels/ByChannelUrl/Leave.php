<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Leave extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/group_channels/{channel_url}/leave [operationId: leaveAChannel] */
    /**
     * Leave a channel
     *
     * ## Leave a channel
     *
     * Makes one or more members leave a group channel.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-leave-a-channel
     * ----------------------------
     */
    public static function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Leave $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Leave::class)->put($channel_url, $params);
    }

}
