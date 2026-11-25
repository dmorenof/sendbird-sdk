<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId;

final class SortedMetaarray extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray [operationId: removeExtraDataFromAMessage] */
    /**
     * Remove extra data from a message
     *
     * ## Remove extra data from a message
     *
     * Removes specific items from a message by their keys.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-remove-metadata#1-remove-metadata
     * ----------------------------
     */
    public static function delete(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::class)->delete($identifier, $params);
    }

    /** POST /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray [operationId: addExtraDataToAMessage] */
    /**
     * Add extra data to a message
     *
     * ## Add extra data to a message
     *
     * Adds one or more key-values items which store additional information for a message.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-add-metadata#1-add-metadata
     * ----------------------------
     */
    public static function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\Add\ExtraDataToAMessage\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::class)->post($identifier, $params);
    }

    /** PUT /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray [operationId: updateExtraDataInAMessage] */
    /**
     * Update extra data in a message
     *
     * ## Update extra data in a message
     *
     * Updates the values of specific items by their keys.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-update-metadata#1-update-metadata
     * ----------------------------
     */
    public static function put(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\Update\ExtraDataInAMessage\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::class)->put($identifier, $params);
    }

}
