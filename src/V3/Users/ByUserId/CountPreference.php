<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class CountPreference extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/users/{user_id}/count_preference/{channel_url} [operationId: viewCountPreferenceOfAChannel] */
    /**
     * View count preference of a channel
     *
     * ## View count preference of a channel
     *
     * This action retrieves a user's count preference of a specific group channel. The count preference allows a user to either retrieve the number of unread messages or unread mentioned messages, or both in a specific group channel.
     *
     * If you want to update the total number count of a specific group channel, visit the [update count preference of a channel](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/update-count-preference-of-a-channel).
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-count-preference-of-a-channel#1-get-count-preference-of-a-channel
     */
    public static function getByChannelUrl(\SendbirdSDK\PathParams\V3\Users\ByUserId\CountPreference\ByChannelUrl $identifier, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\CountPreference\ByChannelUrl $params = null): \SendbirdSDK\DTOs\View\CountPreferenceOfAChannel\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\CountPreference::class)->getByChannelUrl($identifier, $params);
    }

    /** PUT /v3/users/{user_id}/count_preference/{channel_url} [operationId: updateCountPreferenceOfAChannel] */
    /**
     * Update count preference of a channel
     *
     * ## Update count preference of a channel
     *
     * This action updates a user's count preference of a specific group channel. The count preference allows a user to either update the number of unread messages or the number of unread mentioned messages, or both in a specific group channel.
     *
     * If you want to retrieve the total number count of a specific group channel, go to the [get count preference of a channel](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-count-preference-of-a-channel) page.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/update-count-preference-of-a-channel#1-update-count-preference-of-a-channel
     */
    public static function putByChannelUrl(\SendbirdSDK\PathParams\V3\Users\ByUserId\CountPreference\ByChannelUrl $identifier, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\CountPreference\ByChannelUrl $params = null): \SendbirdSDK\DTOs\Update\CountPreferenceOfChannelByUrl\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\CountPreference::class)->putByChannelUrl($identifier, $params);
    }

}
