<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Push\DeviceTokens;

final class ByTokenType extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/push/device_tokens/{token_type}/{token} [operationId: removeARegistrationOrDeviceTokenFromAnOwner] */
    /**
     * Remove a registration or device token from an owner
     *
     * ## Remove a registration or device token from an owner
     *
     * Removes a registration or device token from a user who is the owner of the token. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token-from-an-owner#1-remove-a-registration-or-device-token-from-an-owner
     */
    public static function deleteByToken(\SendbirdSDK\PathParams\V3\Push\DeviceTokens\ByTokenType\ByToken $identifier, ?\SendbirdSDK\DeleteParams\V3\Push\DeviceTokens\ByTokenType\ByToken $params = null): \SendbirdSDK\Collections\V3\Push\DeviceTokens\ByTokenType\ByToken\Delete\ByTokenTypeByTokenCollection
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Push\DeviceTokens\ByTokenType::class)->deleteByToken($identifier, $params);
    }

    /** GET /v3/push/device_tokens/{token_type}/{token} [operationId: viewWhoOwnsARegistrationOrDeviceToken] */
    /**
     * View who owns a registration or device token
     *
     * ## View who owns a registration or device token
     *
     * Retrieves a user who owns a FCM registration token, HMS device token, or APNs device token. You can pass one of two values in `token_type`: `gcm`, `huawei`, or `apns`, depending on which push service you are using.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-who-owns-a-registration-or-device-token
     * ----------------------------
     */
    public static function getByToken(\SendbirdSDK\PathParams\V3\Push\DeviceTokens\ByTokenType\ByToken $identifier, ?\SendbirdSDK\GetParams\V3\Push\DeviceTokens\ByTokenType\ByToken $params = null): \SendbirdSDK\Collections\V3\Push\DeviceTokens\ByTokenType\ByToken\Delete\ByTokenTypeByTokenCollection
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Push\DeviceTokens\ByTokenType::class)->getByToken($identifier, $params);
    }
}
