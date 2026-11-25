<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId\Push;

final class ByTokenType extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/users/{user_id}/push/{token_type}/{token} [operationId: removeARegistrationOrDeviceToken] */
    /**
     * Remove a registration or device token - When unregistering a specific token
     *
     * ## Remove a registration or device token
     *
     * Removes a user's specific registration or device token or all tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token#1-remove-a-registration-or-device-token
     */
    public static function deleteByToken(\SendbirdSDK\PathParams\V3\Users\ByUserId\Push\ByTokenType\ByToken $identifier, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Push\ByTokenType\ByToken $params = null): \SendbirdSDK\DTOs\Remove\ARegistrationOrDeviceToken\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Push\ByTokenType::class)->deleteByToken($identifier, $params);
    }

}
