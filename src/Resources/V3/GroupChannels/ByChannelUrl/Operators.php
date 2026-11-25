<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl;

final class Operators extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/group_channels/{channel_url}/operators',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Cancel the registration of operators
     *
     * ## Unregister operators from a group channel
     *
     * You can unregister operators in a group channel but keep them in the channel as members using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/unregister-operators-from-a-group-channel#1-unregister-operators-from-a-group-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to cancel the registration of operators.
     */
    public function delete(string $channel_url, \SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl\Operators $params): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/group_channels/{channel_url}/operators',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListOperatorsResponse',
    ];

    /**
     * List operators
     *
     * ## List operators
     *
     * You can retrieve a list of operators of a group channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/list-operators-of-a-group-channel#1-list-operators-of-a-group-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve a list of operators.
     */
    public function get(string $channel_url, ?\SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\ListOperatorsResponse
    {
        /** @var \SendbirdSDK\DTOs\ListOperatorsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/group_channels/{channel_url}/operators',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\RegisterOperatorsToAGroupChannelRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Register operators to a group channel
     *
     * ## Register operators to a group channel
     *
     * You can register one or more operators to a group channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/register-operators-to-a-group-channel#1-register-operators-to-a-group-channel
     */
    public function post(string $channel_url, ?\SendbirdSDK\PostParams\V3\GroupChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

}
