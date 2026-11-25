<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl;

final class Messages extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/{channel_type}/{channel_url}/messages',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListMessagesResponse',
    ];

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
    public function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages $identifier, \SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages $params): \SendbirdSDK\DTOs\ListMessagesResponse
    {
        /** @var \SendbirdSDK\DTOs\ListMessagesResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/{channel_type}/{channel_url}/messages',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\Message\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Send\\AMessage\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Messages $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\Message\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

    private const array DELETE_BY_MESSAGE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

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
    public function deleteByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_MESSAGE_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array GET_BY_MESSAGE_ID = [
        'method' => 'GET',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\Message\\Response',
    ];

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
    public function getByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\Message\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MESSAGE_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT_BY_MESSAGE_ID = [
        'method' => 'PUT',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\Message\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\AMessage\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function putByMessageId(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId $params = null): \SendbirdSDK\DTOs\Sendbird\Message\Response
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\Message\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_MESSAGE_ID), path: $identifier, parameters: $params);
        return $result;
    }

}
