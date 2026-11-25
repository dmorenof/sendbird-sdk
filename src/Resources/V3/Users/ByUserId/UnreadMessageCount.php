<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class UnreadMessageCount extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/unread_message_count',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\NumberOfUnreadMessages\\Response',
    ];

    /**
     * View number of unread messages
     *
     * ## View number of unread messages
     *
     * This action retrieves a user's total number of unread messages in group channels.
     *
     * > **Note**: The unread count feature is only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-unread-messages#1-get-number-of-unread-messages](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-unread-messages#1-get-number-of-unread-messages)
     *
     * `user_id`
     * Type: string
     * Description: Specifies the unique ID of a user.
     */
    public function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\UnreadMessageCount $params = null): \SendbirdSDK\DTOs\View\NumberOfUnreadMessages\Response
    {
        /** @var \SendbirdSDK\DTOs\View\NumberOfUnreadMessages\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
