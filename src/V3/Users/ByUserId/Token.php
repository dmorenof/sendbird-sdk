<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class Token extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** POST /v3/users/{user_id}/token [operationId: createUserToken] */
    /**
     * Create user token
     *
     * ## Create user token
     *
     * This action issues a session token for user authentication. Session tokens provide an efficient stateless authentication method by not storing the tokens in the Sendbird database, and thus improving the server's performance. See [access token vs. session token](https://sendbird.com/docs/chat/platform-api/v3/user/creating-users/create-a-user#2-access-token-vs-session-token) to learn more about authenticating users.
     *
     * > **Note**: The endpoint `/users/{user_id}` is deprecated. Use `/users/{user_id}/token` for greater efficiency.
     *
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-session-tokens/issue-a-session-token#1-issue-a-session-token
     */
    public static function post(string $user_id, ?\SendbirdSDK\PostParams\V3\Users\ByUserId\Token $params = null): \SendbirdSDK\DTOs\Create\UserToken\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Token::class)->post($user_id, $params);
    }
}
