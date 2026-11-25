<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\ByChannelType\ByChannelUrl;

final class Messages extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/{channel_type}/{channel_url}/messages [operationId: listMessages] */
    /**
     * List messages
     *
     * ## List messages
     *
     * You can retrieve a list of past messages of a specific channel with this API.
     *
     * By default, this action returns a list of messages in the order they were created. Replies in threaded messages are also listed in the chronological order of their creation like other messages, not grouped with their parent messages.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/list-messages#1-list-messages
     *
     * `channel_type`
     * Type: string
     * Description: Specifies the type of the channel. Either open_channels or group_channels.
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve a list of past messages.
     */
    public static function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages $identifier, \SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages $params): \SendbirdSDK\DTOs\ListMessagesResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages::class)->get($identifier, $params);
    }

    /** POST /v3/{channel_type}/{channel_url}/messages [operationId: sendAMessage] */
    /**
     * Send a message
     *
     * ## Send a message
     *
     * You can use this action to send a text message, a file message, or an admin message to a specific channel. Sendbird Chat SDKs and the platform API allows you to upload any type of files in messages to the Sendbird server. See [Message Overview](https://sendbird.com/docs/chat/platform-api/v3/message/message-overview) for more information on each message type.
     * Messages are sent between client devices running the Sendbird Chat SDK or UIKit as well as programmatically from businesses to their customers. For instance, a delivery app can automatically send a message like "Arriving in one minute!" on behalf of a delivery driver.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/send-a-message#1-send-a-message
     * ----------------------------
     */
    public static function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Messages $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages::class)->post($identifier, $params);
    }

    /** DELETE /v3/{channel_type}/{channel_url}/messages/{message_id} [operationId: deleteAMessage] */
    /**
     * Delete a message
     *
     * ## Delete a message
     *
     * Deletes a message from a channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/delete-a-message#1-delete-a-message
     * ----------------------------
     */
    public static function deleteByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages::class)->deleteByMessageId($identifier, $params);
    }

    /** GET /v3/{channel_type}/{channel_url}/messages/{message_id} [operationId: getAMessage] */
    /**
     * Get a message
     *
     * ## Get a message
     *
     * Retrieves information on a specific message.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/get-a-message#1-get-a-message
     * ----------------------------
     *
     *  `channel_type`
     *      Type: string
     *      Description: Specifies the type of the channel. Either open_channels or group_channels.
     *  `channel_url`
     *      Type: string
     *      Description: Specifies the URL of the target channel.
     *  `message_id`
     *      Type: long
     *      Description: Specifies the unique ID of the message to retrieve.
     */
    public static function getByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages::class)->getByMessageId($identifier, $params);
    }

    /** PUT /v3/{channel_type}/{channel_url}/messages/{message_id} [operationId: updateAMessage] */
    /**
     * Update a message
     *
     * ## Update a message
     *
     * Updates specific information on a message.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/update-a-message#1-update-a-message
     * ----------------------------
     */
    public static function putByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages::class)->putByMessageId($identifier, $params);
    }

}
