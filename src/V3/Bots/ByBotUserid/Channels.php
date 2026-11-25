<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Bots\ByBotUserid;

final class Channels extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/bots/{bot_userid}/channels [operationId: leaveGroupChannels] */
    /**
     * Leave channels - When leaving all channels
     *
     * ## Leave channels
     *
     * Makes a bot leave all group channels.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)
     */
    public static function delete(string $bot_userid, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid\Channels $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots\ByBotUserid\Channels::class)->delete($bot_userid, $params);
    }

    /** POST /v3/bots/{bot_userid}/channels [operationId: joinChannels] */
    /**
     * Join channels
     *
     * ## Join channels
     *
     * Makes a bot join one or more group channels.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels)
     */
    public static function post(string $bot_userid, ?\SendbirdSDK\PostParams\V3\Bots\ByBotUserid\Channels $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots\ByBotUserid\Channels::class)->post($bot_userid, $params);
    }

    /** DELETE /v3/bots/{bot_userid}/channels/{channel_url} [operationId: leaveAGroupChannel] */
    /**
     * Leave channels - When leaving a specific channel
     *
     * ## Leave channels
     *
     * Makes a bot leave a specific channel
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)
     */
    public static function deleteByChannelUrl(\SendbirdSDK\PathParams\V3\Bots\ByBotUserid\Channels\ByChannelUrl $identifier, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid\Channels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots\ByBotUserid\Channels::class)->deleteByChannelUrl($identifier, $params);
    }
}
