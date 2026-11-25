<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Freeze extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/group_channels/{channel_url}/freeze [operationId: freezeAGroupChannel] */
    /**
     * Freeze a group channel
     *
     * ## Freeze a group channel
     *
     * Freezes or unfreezes a group channel.
     *
     * > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel)
     */
    public static function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Freeze $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Freeze::class)->put($channel_url, $params);
    }
}
