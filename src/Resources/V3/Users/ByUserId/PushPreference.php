<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class PushPreference extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}/push_preference',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Reset push preferences
     *
     * ## Reset push preferences
     *
     * You can reset a user's notifications preferences. The values are reset to the default as the following.
     *
     * - The values for the `do_not_disturb` and `snooze_enabled` properties are set to `false`.
     *
     * - The values of the parameters associated with the time frame are all set to `0`.
     *
     * - The value for the `timezone` property is set to `UTC`.
     *
     * - The value for the `push_sound` property is set to `default`.
     *
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/reset-push-notification-preferences#1-reset-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/reset-push-notification-preferences#1-reset-push-notification-preferences)
     */
    public function delete(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\PushPreference $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/push_preference',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\PushPreferences\\Response',
    ];

    /**
     * View push preferences
     *
     * ## View push preferences
     *
     * You can retrieves a user's notifications preferences. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences#1-get-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences#1-get-push-notification-preferences)
     */
    public function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\PushPreference $params = null): \SendbirdSDK\DTOs\View\PushPreferences\Response
    {
        /** @var \SendbirdSDK\DTOs\View\PushPreferences\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/push_preference',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\PushPreferences\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\PushPreferences\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update push preferences
     *
     * ## Update push preferences
     *
     * You can update a user's notifications preferences. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences#1-update-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences#1-update-push-notification-preferences)
     */
    public function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\PushPreference $params = null): \SendbirdSDK\DTOs\Update\PushPreferences\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\PushPreferences\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array GET_BY_CHANNEL_URL = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/push_preference/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\PushPreferencesForAChannel\\Response',
    ];

    /**
     * View push preferences for a channel
     *
     * ## View push preferences for a channel
     *
     * You can retrieve a user's notifications preferences for a specific channel. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background. These notifications preferences can be configured.
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences-for-a-channel#1-get-push-notification-preferences-for-a-channel](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences-for-a-channel#1-get-push-notification-preferences-for-a-channel)
     */
    public function getByChannelUrl(\SendbirdSDK\PathParams\V3\Users\ByUserId\PushPreference\ByChannelUrl $identifier, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\PushPreference\ByChannelUrl $params = null): \SendbirdSDK\DTOs\View\PushPreferencesForAChannel\Response
    {
        /** @var \SendbirdSDK\DTOs\View\PushPreferencesForAChannel\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CHANNEL_URL), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT_BY_CHANNEL_URL = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/push_preference/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\PushPreferencesForAChannel\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\PushPreferencesForAChannel\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update push preferences for a channel
     *
     * ## Update push preferences for a channel
     *
     * You can update a user's notifications preferences for a specific channel. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences-for-a-channel#1-update-push-notification-preferences-for-a-channel](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences-for-a-channel#1-update-push-notification-preferences-for-a-channel)
     */
    public function putByChannelUrl(\SendbirdSDK\PathParams\V3\Users\ByUserId\PushPreference\ByChannelUrl $identifier, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\PushPreference\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Update\PushPreferencesForAChannel\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\PushPreferencesForAChannel\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_CHANNEL_URL), path: $identifier, parameters: $params);
        return $result;
    }
}
