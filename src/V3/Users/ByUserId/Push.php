<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class Push extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/users/{user_id}/push [operationId: removeAllRegistrationOrDeviceToken] */
    /**
     * Remove a registration or device token - When unregistering all device tokens
     *
     * ## Remove a registration or device token
     *
     * Removes a user's specific registration or device token or all tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token#1-remove-a-registration-or-device-token
     */
    public static function delete(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Push $params = null): \SendbirdSDK\DTOs\Remove\AllRegistrationOrDeviceToken\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Push::class)->delete($user_id, $params);
    }

    /** GET /v3/users/{user_id}/push/{token_type} [operationId: listRegistrationOrDeviceTokens] */
    /**
     * List registration or device tokens
     *
     * ## List registration or device tokens
     *
     * Retrieves a list of a user's registration or device tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/list-registration-or-device-tokens#1-list-registration-or-device-tokens
     */
    public static function getByTokenType(\SendbirdSDK\PathParams\V3\Users\ByUserId\Push\ByTokenType $identifier, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\Push\ByTokenType $params = null): \SendbirdSDK\DTOs\ListRegistrationOrDeviceTokensResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Push::class)->getByTokenType($identifier, $params);
    }

    /** POST /v3/users/{user_id}/push/{token_type} [operationId: addARegistrationOrDeviceToken] */
    /**
     * Add a registration or device token
     *
     * ## Add a registration or device token
     *
     * > __Note__: A user can have up to 20 FCM registration tokens, 20 HMS device tokens, and 20 APNs device tokens each. The oldest token will be deleted before a new token is added for a user who already has 20 registration or device tokens. Only the 20 newest tokens will be maintained for users who already have more than 20 of each token type.
     *
     * To send notification requests to push notification services on behalf of your server, adds a specific user's FCM registration token, HMS device token, or APNs device token to Sendbird server. Depending on which push service you are using, you can pass one of two values in `token_type`: `gcm`, `huawei`, or `apns`.
     *
     * A FCM registration token and an APNs device token allow identification of each client app instance on each device, and are generated and registered by Android and iOS apps through the corresponding SDKs. Use this method if you need to register a token via your own server.
     *
     * > __Note__: For more information on the registration token and device token, visit the Google's [FCM](https://firebase.google.com/docs/auth/admin/verify-id-tokens) page, Huawei's [Push kit](https://developer.huawei.com/consumer/en/doc/development/HMSCore-Guides/service-introduction-0000001050040060) and Apple's [APNs](https://developer.apple.com/library/content/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/APNSOverview.html) page.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-add-a-registration-or-device-token
     * ----------------------------
     */
    public static function postByTokenType(\SendbirdSDK\PathParams\V3\Users\ByUserId\Push\ByTokenType $identifier, ?\SendbirdSDK\PostParams\V3\Users\ByUserId\Push\ByTokenType $params = null): \SendbirdSDK\DTOs\Add\ARegistrationOrDeviceToken\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Push::class)->postByTokenType($identifier, $params);
    }

}
