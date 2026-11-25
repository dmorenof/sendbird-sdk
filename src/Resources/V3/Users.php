<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3;

final class Users extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListUsersResponse',
    ];

    /**
     * List users
     *
     * ## List users
     *
     * You can retrieve a list of users in your Sendbird application using this API. You can generate a customized list using various parameter combinations.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/listing-users/list-users#1-list-users
     */
    public function get(?\SendbirdSDK\GetParams\V3\Users $params = null): \SendbirdSDK\DTOs\ListUsersResponse
    {
        /** @var \SendbirdSDK\DTOs\ListUsersResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/users',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\User',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Create\\AUser\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a user
     *
     * ## Create a user
     *
     * You should create a user in your Sendbird application to initiate conversations in channels. A user is identified by its unique user ID, and additionally have a changeable nickname, profile image, and so on. Users are at the core of all conversations. Sendbird applications are made up of users who chat in either Open Channels or Group Channels. Using this API, it is possible to have fine grained control over your users and what those users can do. To learn more about users, see [User overview](https://sendbird.com/docs/chat/platform-api/v3/user/user-overview#2-resource-representation).
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/creating-users/create-a-user#1-create-a-user
     */
    public function post(?\SendbirdSDK\PostParams\V3\Users $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\User $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_USER_ID = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

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
    public function deleteByUserId(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_USER_ID), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array GET_BY_USER_ID = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\User',
    ];

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
    public function getByUserId(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\User $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_USER_ID), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_USER_ID = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\User',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\AUser\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function putByUserId(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId $params = null): \SendbirdSDK\DTOs\Sendbird\User
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\User $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_USER_ID), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
