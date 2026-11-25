<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class MyGroupChannels extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/my_group_channels',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListMyGroupChannelsResponse',
    ];

    /**
     * List my group channels
     *
     * ## List my group channels
     *
     * This action retrieves a list of [group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) that a specific user has joined. You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.
     *
     * If you're looking to retrieve a list of group channels in a specific application, visit the [list group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-group-channels) page under the Channel section.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/list-group-channels-by-user#1-list-group-channels-by-user
     *
     * `user_id`
     * Type: string
     * Description: Specifies the unique ID of the target user.
     */
    public function get(string $user_id, \SendbirdSDK\GetParams\V3\Users\ByUserId\MyGroupChannels $params): \SendbirdSDK\DTOs\ListMyGroupChannelsResponse
    {
        /** @var \SendbirdSDK\DTOs\ListMyGroupChannelsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
