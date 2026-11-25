<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId\MyGroupChannels;

final class Leave extends \SendbirdSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/my_group_channels/leave',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\LeaveMyGroupChannelsRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Leave my group channels
     *
     * ## Leave my group channels
     *
     * This action allows a user to leave all group channels or channels with a specific custom type. This API is useful if you want to let a user leave a set of channels at once. To let a user leave only one of their group channels, use the [leave a channel API](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/leave-a-channel) instead.
     *
     * Since this API can't be called for a deactivated user, ensure that the [<code>leave_all_when_deactivated</code>](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#2-request-body) property of the user is set to its default value of `true` to let the user leave all joined group channels upon deactivation.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/leave-group-channels#1-leave-group-channels
     *
     * `user_id`
     * Type: string
     * Description: Specifies the unique ID of the user to leave all joined group channels.
     */
    public function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\MyGroupChannels\Leave $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
