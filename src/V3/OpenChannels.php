<?php

declare(strict_types=1);

namespace SendbirdSDK\V3;

final class OpenChannels extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/open_channels [operationId: listOpenChannels] */
    /**
     * List open channels
     *
     * ## List open channels
     *
     * This action retrieves a list of [open channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel). You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-open-channels#1-list-open-channels](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-open-channels#1-list-open-channels)
     */
    public static function get(?\SendbirdSDK\GetParams\V3\OpenChannels $params = null): \SendbirdSDK\DTOs\ListOpenChannelsResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels::class)->get($params);
    }

    /** POST /v3/open_channels [operationId: createAnOpenChannel] */
    /**
     * Create an open channel
     *
     * ## Create an open channel
     *
     * You can create an [open channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel) that facilitates conversations for millions of users. Open channels allow a seamless chat experience possible for all participants by using [dynamic partitioning](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-how-dynamic-partitioning-works) which creates subchannels that each handle up to tens of thousands of participants.
     *
     * Because users don't need invitations to join open channels, short-lived live events like concerts or live streams that don't require a sustained membership are good use cases for open channels.
     *
     * [https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel](https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel)
     */
    public static function post(?\SendbirdSDK\PostParams\V3\OpenChannels $params = null): \SendbirdSDK\DTOs\Sendbird\OpenChannel
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels::class)->post($params);
    }

    /** DELETE /v3/open_channels/{channel_url} [operationId: deleteAnOpenChannel] */
    /**
     * Delete an open channel
     *
     * ## Delete an open channel
     *
     * You can delete an open channel using this API. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-an-open-channel#1-delete-an-open-channel
     */
    public static function deleteByChannelUrl(string $channel_url, ?\SendbirdSDK\DeleteParams\V3\OpenChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels::class)->deleteByChannelUrl($channel_url, $params);
    }

    /** GET /v3/open_channels/{channel_url} [operationId: getAnOpenChannel] */
    /**
     * Get an open channel
     *
     * ## Get an open channel
     *
     * This action retrieves information about a specific [open channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel).
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-an-open-channel#1-get-an-open-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-an-open-channel#1-get-an-open-channel)
     */
    public static function getByChannelUrl(string $channel_url, ?\SendbirdSDK\GetParams\V3\OpenChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Sendbird\OpenChannel
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels::class)->getByChannelUrl($channel_url, $params);
    }

    /** PUT /v3/open_channels/{channel_url} [operationId: updateAnOpenChannel] */
    /**
     * Update an open channel
     *
     * ## Update an open channel
     *
     * You can update information about an open channel using this API. You can add a cover image to a channel to better identify the channel or specify a custom channel type for grouping channels by custom type. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-an-open-channel#1-update-an-open-channel
     */
    public static function putByChannelUrl(string $channel_url, ?\SendbirdSDK\PutParams\V3\OpenChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Sendbird\OpenChannel
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels::class)->putByChannelUrl($channel_url, $params);
    }

}
