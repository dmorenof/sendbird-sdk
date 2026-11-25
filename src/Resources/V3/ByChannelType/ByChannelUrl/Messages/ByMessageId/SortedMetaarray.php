<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId;

final class SortedMetaarray extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

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
    public function delete(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray',
        'responseType' => '\\SendbirdSDK\\DTOs\\Add\\ExtraDataToAMessage\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Add\\ExtraDataToAMessage\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\Add\ExtraDataToAMessage\Response
    {
        /** @var \SendbirdSDK\DTOs\Add\ExtraDataToAMessage\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\ExtraDataInAMessage\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\ExtraDataInAMessage\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function put(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray $params = null): \SendbirdSDK\DTOs\Update\ExtraDataInAMessage\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\ExtraDataInAMessage\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: $identifier, parameters: $params);
        return $result;
    }
}
