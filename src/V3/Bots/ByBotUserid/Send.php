<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Bots\ByBotUserid;

final class Send extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** POST /v3/bots/{bot_userid}/send [operationId: sendABotMessage] */
    /**
     * Send a bot's message
     *
     * ## Send a bot message
     *
     * Sends a bot message to a group channel.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/sending-a-bot-message/send-a-bot-message#1-send-a-bot-message](https://sendbird.com/docs/chat/platform-api/v3/bot/sending-a-bot-message/send-a-bot-message#1-send-a-bot-message)
     *
     * `bot_userid`
     * Type: string
     * Description: Specifies the ID of the bot to send a message.
     */
    public static function post(string $bot_userid, ?\SendbirdSDK\PostParams\V3\Bots\ByBotUserid\Send $params = null): \SendbirdSDK\DTOs\Send\ABotMessage\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots\ByBotUserid\Send::class)->post($bot_userid, $params);
    }
}
