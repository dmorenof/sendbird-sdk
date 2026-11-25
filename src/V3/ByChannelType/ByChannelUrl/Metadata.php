<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\ByChannelType\ByChannelUrl;

final class Metadata extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/{channel_type}/{channel_url}/metadata [operationId: deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata] */
    /**
     * Delete a channel metadata - When deleting all items of a channel metadata
     *
     * ## Delete a channel metadata
     *
     * Deletes a channel metadata's one or all items that are stored in a channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-delete-metadata#1-delete-metadata
     * ----------------------------
     *
     *  `channel_type`
     *      Type: string
     *      Description: Specifies the type of the channel. Either open_channels or group_channels.
     *  `channel_url`
     *      Type: string
     *      Description: Specifies the URL of the channel which has the metadata to delete.
     */
    public static function delete(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Metadata::class)->delete($identifier, $params);
    }

    /** GET /v3/{channel_type}/{channel_url}/metadata [operationId: viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata] */
    /**
     * View a channel metadata - When retrieving all items of a channel metadata
     *
     * ## View a channel metadata
     *
     * Retrieves a channel metadata's one or more items that are stored in a channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-get-metadata#1-get-metadata
     * ----------------------------
     *
     *  `channel_type`
     *      Type: string
     *      Description: Specifies the type of the channel. Either open_channels or group_channels.
     *  `channel_url`
     *      Type: string
     *      Description: Specifies the URL of the target channel.
     */
    public static function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\View\AChannelMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Metadata::class)->get($identifier, $params);
    }

    /** POST /v3/{channel_type}/{channel_url}/metadata [operationId: createAChannelMetadata] */
    /**
     * Create a channel metadata
     *
     * ## Create a channel metadata
     *
     * Creates a channel metadata's items to store in a channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-create-metadata#1-create-metadata
     * ----------------------------
     */
    public static function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\Create\AChannelMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Metadata::class)->post($identifier, $params);
    }

    /** PUT /v3/{channel_type}/{channel_url}/metadata [operationId: updateAChannelMetadata] */
    /**
     * Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata
     *
     * ## Update a channel metadata
     *
     * Updates existing items of a channel metadata by their keys, or adds new items to the metadata.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-update-metadata#1-update-metadata
     * ----------------------------
     *
     *  `channel_type`
     *      Type: string
     *      Description: Specifies the type of the channel. Either open_channels or group_channels.
     *  `channel_url`
     *      Type: string
     *      Description: Specifies the URL of the target channel.
     */
    public static function put(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\Update\AChannelMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Metadata::class)->put($identifier, $params);
    }
}
