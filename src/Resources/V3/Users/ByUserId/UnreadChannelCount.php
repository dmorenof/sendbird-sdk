<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class UnreadChannelCount extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/unread_channel_count',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\NumberOfChannelsWithUnreadMessages\\Response',
    ];

    /**
     * View number of channels with unread messages
     *
     * ## View number of channels with unread messages
     *
     * This action retrieves the total number of group channels in which a user has unread messages. You can use various query parameters to determine the search scope of group channels.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-channels-with-unread-messages#1-get-number-of-channels-with-unread-messages
     */
    public function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\UnreadChannelCount $params = null): \SendbirdSDK\DTOs\View\NumberOfChannelsWithUnreadMessages\Response
    {
        /** @var \SendbirdSDK\DTOs\View\NumberOfChannelsWithUnreadMessages\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
