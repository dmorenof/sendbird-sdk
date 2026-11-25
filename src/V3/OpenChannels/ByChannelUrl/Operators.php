<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\OpenChannels\ByChannelUrl;

final class Operators extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/open_channels/{channel_url}/operators [operationId: unregisterOperators] */
    /**
     * Unregister operators from an open channel
     *
     * ## Unregister operators from an open channel
     *
     * You can unregister operators in an open channel but keep them in the channel as participants using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/unregister-operators-from-an-open-channel#1-unregister-operators-from-an-open-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to cancel the registration of operators.
     */
    public static function delete(string $channel_url, \SendbirdSDK\DeleteParams\V3\OpenChannels\ByChannelUrl\Operators $params): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels\ByChannelUrl\Operators::class)->delete($channel_url, $params);
    }

    /** GET /v3/open_channels/{channel_url}/operators [operationId: listChannelOperators] */
    /**
     * List operators of an open channel
     *
     * ## List operators of an open channel
     *
     * You can retrieve a list of operators of an open channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/list-operators-of-an-open-channel#1-list-operators-of-an-open-channel
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve a list of operators.
     */
    public static function get(string $channel_url, ?\SendbirdSDK\GetParams\V3\OpenChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\ListOperatorsResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels\ByChannelUrl\Operators::class)->get($channel_url, $params);
    }

    /** POST /v3/open_channels/{channel_url}/operators [operationId: registerOperators] */
    /**
     * Register operators to an open channel
     *
     * ## Register operators to an open channel
     *
     * You can register one or more operators to an open channel using this API.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/register-operators-to-an-open-channel#1-register-operators-to-an-open-channel
     */
    public static function post(string $channel_url, ?\SendbirdSDK\PostParams\V3\OpenChannels\ByChannelUrl\Operators $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\OpenChannels\ByChannelUrl\Operators::class)->post($channel_url, $params);
    }

}
