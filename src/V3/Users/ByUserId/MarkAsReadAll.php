<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class MarkAsReadAll extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/users/{user_id}/mark_as_read_all [operationId: markAllMessagesAsRead] */
    /**
     * Mark all messages as read
     *
     * ## Mark all messages as read
     *
     * This action marks all of a user's unread messages as read in certain group channels. If channels aren't specified, the user's unread messages in all group channels are marked as read.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/marking-messages-as-read/mark-all-of-a-users-messages-as-read#1-mark-all-of-a-user-s-messages-as-read
     */
    public static function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\MarkAsReadAll $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\MarkAsReadAll::class)->put($user_id, $params);
    }

}
