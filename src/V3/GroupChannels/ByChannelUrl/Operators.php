<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Operators extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/group_channels/{channel_url}/operators [operationId: cancelTheRegistrationOfOperators] */
    /**
     * Cancel the registration of operators
     *
     * ## Unregister operators from a group channel
     *
     * You can unregister operators in a group channel but keep them in the channel as members using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/unregister-operators-from-a-group-channel#1-unregister-operators-from-a-group-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to cancel the registration of operators.
     */
    public static function delete(string $channel_url, \SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl\Operators $params): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Operators::class)->delete($channel_url, $params);
    }

    /** GET /v3/group_channels/{channel_url}/operators [operationId: listOperators] */
    /**
     * List operators
     *
     * ## List operators
     *
     * You can retrieve a list of operators of a group channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/list-operators-of-a-group-channel#1-list-operators-of-a-group-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve a list of operators.
     */
    public static function get(string $channel_url, ?\SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\ListOperatorsResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Operators::class)->get($channel_url, $params);
    }

    /** POST /v3/group_channels/{channel_url}/operators [operationId: registerOperatorsToAGroupChannel] */
    /**
     * Register operators to a group channel
     *
     * ## Register operators to a group channel
     *
     * You can register one or more operators to a group channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/register-operators-to-a-group-channel#1-register-operators-to-a-group-channel
     */
    public static function post(string $channel_url, ?\SendbirdSDK\PostParams\V3\GroupChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Operators::class)->post($channel_url, $params);
    }

}
