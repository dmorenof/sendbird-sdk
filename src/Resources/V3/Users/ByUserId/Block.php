<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class Block extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/block',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListBlockedUsersResponse',
    ];

    /**
     * List blocked users
     *
     * ## List blocked by and blocking users
     *
     * This action retrieves a list of users who are either blocked by a specific user or a list of users who are blocking a specific user.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users#1-list-blocked-by-and-blocking-users](https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users#1-list-blocked-by-and-blocking-users)
     *
     * `user_id`
     * Type: string
     * Description: Specifies the unique ID of the target user.
     */
    public function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\Block $params = null): \SendbirdSDK\DTOs\ListBlockedUsersResponse
    {
        /** @var \SendbirdSDK\DTOs\ListBlockedUsersResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/users/{user_id}/block',
        'responseType' => '\\SendbirdSDK\\DTOs\\BlockAUserResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\BlockAUserRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Block a user
     *
     * ## Block a user
     *
     * A user can block another user if the user doesn't wish to receive any messages or notifications from the blocked user in a 1-to-1 group channel. In a 1-to-N group channel, the user can still receive messages from the blocked user, but this depends on the UI settings of the chat view. In any case, notifications from the blocked user won't be delivered to the 1-to-N group channel. You can choose whether or not the user can view [which users are blocked](https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users) in the channel UI.
     *
     * Sendbird application provides two blocking options: include or exclude blocked users when sending invitations, and turn on or off notifications from blocked users. [Explicit and classic block modes](https://sendbird.com/docs/chat/platform-api/v3/deprecated#2-explicit-and-classic-block-modes) have been deprecated and are only supported for customers who started using them before they were deprecated.
     *
     * - **Include or exclude blocked users when sending invitations**: Determines whether or not to automatically filter out blocked users when a user invites a group of users to a new group channel. By default, blocked users are included when sending invitations. The value of this option can be changed by Sendbird if your Sendbird application isn't integrated with the client app. If you want to change the value, [contact our sales team](https://get.sendbird.com/talk-to-sales.html).
     *
     * - **Turn on or off notifications from blocked users**: Determines whether or not to receive message notifications from the blocked user in a specific 1-to-N group channel where they are both members. By default, a user doesn't receive notifications from blocked users. The value of this option can be set individually per channel. If you want to use this option, [contact our sales team](https://get.sendbird.com/talk-to-sales.html).
     *
     * > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).  The following tables explain what happens to a user's chat experience when the user blocks another user in a 1-to-1 or 1-to-N group channel. In the case of a 1-to-1 group channel, the block mode is only maintained with the original members. If other than the original members are added, the rules for 1-to-N group channel begin to apply.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/block-users#1-block-users](https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/block-users#1-block-users)
     */
    public function post(string $user_id, ?\SendbirdSDK\PostParams\V3\Users\ByUserId\Block $params = null): \SendbirdSDK\DTOs\BlockAUserResponse
    {
        /** @var \SendbirdSDK\DTOs\BlockAUserResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_TARGET_ID = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}/block/{target_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Unblock a user
     *
     * ## Unblock a user
     *
     * Unblocks the user.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/unblock-a-user#1-unblock-a-user
     */
    public function deleteByTargetId(\SendbirdSDK\PathParams\V3\Users\ByUserId\Block\ByTargetId $identifier, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Block\ByTargetId $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_TARGET_ID), path: $identifier, parameters: $params);
        return $result;
    }
}
