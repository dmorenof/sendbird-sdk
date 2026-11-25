<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl;

final class Hide extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/group_channels/{channel_url}/hide',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Unhide a channel
     *
     * ## Unhide a channel
     *
     * This action lets a hidden [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) reappear on the channel list of a specific user or every member in the group channel. Hiding or unhiding a channel lets users organize their channel list based on those that require the most attention. Note that only group channels can be hidden or unhidden.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/unhide-a-channel#1-unhide-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/unhide-a-channel#1-unhide-a-channel)
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to unhide or unarchive.
     */
    public function delete(string $channel_url, \SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl\Hide $params): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/group_channels/{channel_url}/hide',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\HideAChannelRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Hide a channel
     *
     * ## Hide a channel
     *
     * This action allows you to hide a [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) from a user's channel list. Hiding a channel gives users the ability to archive channels so that they can focus on channels that need the most attention.
     *
     * With this API, you can allow users to hide a channel from themselves or from all channel members. You can also determine whether to have the channel remain hidden when a new message is sent to the channel. Note that only group channels can be hidden.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/hide-a-channel#1-hide-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/hide-a-channel#1-hide-a-channel)
     */
    public function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Hide $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

}
