<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3;

final class GroupChannels extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/group_channels',
        'responseType' => '\\SendbirdSDK\\DTOs\\GroupChatListChannelsResponse',
    ];

    /**
     * List channels
     *
     * ## List group channels
     *
     * This action retrieves a list of [group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel). You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.
     *
     * If you want to retrieve a list of group channels that a specific user has joined, use the [list group channels by user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/list-group-channels-by-user) action under the User section.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-group-channels#1-list-group-channels
     */
    public function get(\SendbirdSDK\GetParams\V3\GroupChannels $params): \SendbirdSDK\DTOs\GroupChatListChannelsResponse
    {
        /** @var \SendbirdSDK\DTOs\GroupChatListChannelsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/group_channels',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\GroupChannelDetail',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Create\\AGroupChannel\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a group channel
     *
     * ## Create a group channel
     *
     * You can create a group channel for 1-to-1 and 1-to-N conversations. By default, group channels are used for conversations between up to 100 members. This number can stretch up to tens of thousands in Supergroup channels. Group channels can either be private and invite only, or public. They support typing indicators, unread count and read receipts, allowing for an interactive chat experience. A user can join up to 2000 group channels, and higher numbers would negatively impact the performance for the end user. The Chat history is turned off by default and its settings can be changed on Sendbird Dashboard by going to Settings > Chat > Channels > Group channels > Chat history. To learn more about group channels, see Channel Overview.
     *
     * > If you are seeing the error message Maximum "channel join" count reached., then consider deleting channels that are no longer used. For situations where an agent connects with many customers such as support, delivery logistics or sales, we recommend using Sendbird Desk.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/creating-a-channel/create-a-group-channel#1-create-a-group-channel
     */
    public function post(?\SendbirdSDK\PostParams\V3\GroupChannels $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CHANNEL_URL = [
        'method' => 'DELETE',
        'path' => '/v3/group_channels/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Delete a group channel
     *
     * ## Delete a group channel
     *
     * You can delete a group channel or a Supergroup channel using this API. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-a-group-channel#1-delete-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-a-group-channel#1-delete-a-group-channel)
     */
    public function deleteByChannelUrl(string $channel_url, ?\SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CHANNEL_URL), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

    private const array GET_BY_CHANNEL_URL = [
        'method' => 'GET',
        'path' => '/v3/group_channels/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Get\\AGroupChannel\\Response',
    ];

    /**
     * Get a group channel
     *
     * ## Get a group channel
     *
     * This action retrieves information about a specific [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel). You can use the optional query parameters to determine whether to include delivery receipt, read receipt, or member information in the response.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-a-group-channel#1-get-a-group-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve.
     */
    public function getByChannelUrl(string $channel_url, ?\SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Get\AGroupChannel\Response
    {
        /** @var \SendbirdSDK\DTOs\Get\AGroupChannel\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CHANNEL_URL), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

    private const array PUT_BY_CHANNEL_URL = [
        'method' => 'PUT',
        'path' => '/v3/group_channels/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\GroupChannelDetail',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\AGroupChannel\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a group channel
     *
     * ## Update a group channel
     *
     * You can update information about a group channel or a Supergroup channel using this API. You can't make any changes to the members of a channel with this API. To change members, see [invite as members](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel) instead. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-a-group-channel#1-update-a-group-channel
     */
    public function putByChannelUrl(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_CHANNEL_URL), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }
}
