<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId\Push;

final class Template extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** PUT /v3/users/{user_id}/push/template [operationId: chooseAPushNotificationContentTemplate] */
    /**
     * Choose a push notification content template
     *
     * ## Choose a push notification content template
     *
     * Users can choose a template to determine how push notifications appear to them. Push notification content templates are pre-formatted forms that can be customized to display your own push notification messages on a user's device. Sendbird provides two types: `default` and `alternative`. Go to **Settings** > **Chat** > **Push notifications** > **Push notification content templates** on [Sendbird Dashboard](https://dashboard.sendbird.com/auth/signin) to customize the templates.
     *
     * If the `push_message_template` property is specified when [sending a message](https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/send-a-message), the content template customized for the message takes precedence over the user's choice.
     *
     * > **Note**: Push notifications are only available for group channels.
     *
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/choose-a-push-notification-content-template#1-choose-a-push-notification-content-template
     */
    public static function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\Push\Template $params = null): \SendbirdSDK\DTOs\ChooseAPushNotificationContentTemplateResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Push\Template::class)->put($user_id, $params);
    }

}
