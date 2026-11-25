<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\OpenChannels\ByChannelUrl;

final class Freeze extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/open_channels/{channel_url}/freeze [operationId: freezeAnOpenChannel] */
    /**
     * Freeze an open channel
     *
     * ## Freeze an open channel
     *
     * Freezes or unfreezes an open channel.
     *
     * > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel)
     */
    public static function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\OpenChannels\ByChannelUrl\Freeze $params = null): \SendbirdSDK\DTOs\Sendbird\OpenChannel
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels\ByChannelUrl\Freeze::class)->put($channel_url, $params);
    }

}
