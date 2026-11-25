<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId\Push;

final class ByTokenType extends \SendbirdSDK\Client
{
    private const array DELETE_BY_TOKEN = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}/push/{token_type}/{token}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Remove\\ARegistrationOrDeviceToken\\Response',
    ];

    /**
     * Remove a registration or device token - When unregistering a specific token
     *
     * ## Remove a registration or device token
     *
     * Removes a user's specific registration or device token or all tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token#1-remove-a-registration-or-device-token
     */
    public function deleteByToken(\SendbirdSDK\PathParams\V3\Users\ByUserId\Push\ByTokenType\ByToken $identifier, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Push\ByTokenType\ByToken $params = null): \SendbirdSDK\DTOs\Remove\ARegistrationOrDeviceToken\Response
    {
        /** @var \SendbirdSDK\DTOs\Remove\ARegistrationOrDeviceToken\Response $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_TOKEN), path: $identifier, parameters: $params);
        return $result;
    }
}
