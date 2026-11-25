<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class UnreadMessageCount extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/users/{user_id}/unread_message_count [operationId: viewNumberOfUnreadMessages] */
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
    public static function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\UnreadMessageCount $params = null): \SendbirdSDK\DTOs\View\NumberOfUnreadMessages\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\UnreadMessageCount::class)->get($user_id, $params);
    }

}
