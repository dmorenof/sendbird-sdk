<?php

declare(strict_types=1);

namespace SendbirdSDK\V3;

final class Users extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/users [operationId: listUsers] */
    /**
     * List users
     *
     * ## List users
     *
     * You can retrieve a list of users in your Sendbird application using this API. You can generate a customized list using various parameter combinations.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/listing-users/list-users#1-list-users
     */
    public static function get(?\SendbirdSDK\GetParams\V3\Users $params = null): \SendbirdSDK\DTOs\ListUsersResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users::class)->get($params);
    }

    /** POST /v3/users [operationId: createAUser] */
    /**
     * Create a user
     *
     * ## Create a user
     *
     * You should create a user in your Sendbird application to initiate conversations in channels. A user is identified by its unique user ID, and additionally have a changeable nickname, profile image, and so on. Users are at the core of all conversations. Sendbird applications are made up of users who chat in either Open Channels or Group Channels. Using this API, it is possible to have fine grained control over your users and what those users can do. To learn more about users, see [User overview](https://sendbird.com/docs/chat/platform-api/v3/user/user-overview#2-resource-representation).
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/creating-users/create-a-user#1-create-a-user
     */
    public static function post(?\SendbirdSDK\PostParams\V3\Users $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users::class)->post($params);
    }

    /** DELETE /v3/users/{user_id} [operationId: deleteAUser] */
    /**
     * Delete a user
     *
     * ## Delete a user
     *
     * You can delete a user from your Sendbird application using this API.
     *
     * > **Note**: This API deletes user data and metadata, except for their messages. If you wish to delete user data including their messages, use the [GDPR request](https://sendbird.com/docs/chat/platform-api/v3/privacy/privacy-overview).
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/delete-a-user#1-delete-a-user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/delete-a-user#1-delete-a-user)
     */
    public static function deleteByUserId(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users::class)->deleteByUserId($user_id, $params);
    }

    /** GET /v3/users/{user_id} [operationId: viewAUser] */
    /**
     * View a user
     *
     * ## View a user
     *
     * You can retrieve information about a user using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/listing-users/get-a-user#1-get-a-user
     *
     * `user_id`
     * Type: string
     * Description: Specifies the unique ID of the user to retrieve.
     */
    public static function getByUserId(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users::class)->getByUserId($user_id, $params);
    }

    /** PUT /v3/users/{user_id} [operationId: updateAUser] */
    /**
     * Update a user
     *
     * ## Update a user
     *
     * You can update information about a user using this API. In addition to changing a user's nickname or profile image, you can issue a new access token for the user. The new access token replaces the previous one as the necessary token for authentication.
     *
     * You can also deactivate or reactivate a user using this API request. If the `leave_all_when_deactivated` is set to `true`, a user leaves all joined group channels and becomes deactivated.
     *
     * > **Note**: Issuing session tokens through the `/users/{user_id}` endpoint is now deprecated and it&apos;s replaced with [&lt;code&gt;/users/{user_id}/token&lt;/code&gt;](https://sendbird.com/docs/chat/platform-api/v3/user/managing-session-tokens/issue-a-session-token) endpoint for greater efficiency. For those who are currently using the old endpoint, you can start issuing tokens using the new endpoint.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#1-update-a-user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#1-update-a-user)
     */
    public static function putByUserId(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users::class)->putByUserId($user_id, $params);
    }

}
