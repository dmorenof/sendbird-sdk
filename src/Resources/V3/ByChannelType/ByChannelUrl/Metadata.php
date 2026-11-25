<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl;

final class Metadata extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/{channel_type}/{channel_url}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

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
    public function delete(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\DeleteParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: $identifier, parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/{channel_type}/{channel_url}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\AChannelMetadata\\Response',
    ];

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
    public function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\View\AChannelMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\View\AChannelMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/{channel_type}/{channel_url}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\Create\\AChannelMetadata\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Create\\AChannelMetadata\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\Create\AChannelMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\Create\AChannelMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/{channel_type}/{channel_url}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\AChannelMetadata\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\AChannelMetadata\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function put(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Metadata $identifier, ?\SendbirdSDK\PutParams\V3\ByChannelType\ByChannelUrl\Metadata $params = null): \SendbirdSDK\DTOs\Update\AChannelMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\AChannelMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: $identifier, parameters: $params);
        return $result;
    }

}
