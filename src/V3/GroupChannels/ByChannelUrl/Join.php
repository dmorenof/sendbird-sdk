<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Join extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/group_channels/{channel_url}/join [operationId: joinAChannel] */
    /**
     * Join a channel
     *
     * ## Join a channel
     *
     * This API allows a user to join a [public](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-group-channel-types) group channel. Users can only join public group channels where the `is_public` property is set to `true` using this API. A single user can join up to 2,000 group channels, and a user who reaches the capacity can’t join a new channel. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/join-a-channel#1-join-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/join-a-channel#1-join-a-channel)
     */
    public static function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Join $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Join::class)->put($channel_url, $params);
    }

}
