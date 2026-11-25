<?php

declare(strict_types=1);

namespace SendbirdSDK\V3;

final class Bots extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/bots [operationId: listBots] */
    /**
     * List bots
     *
     * ## List bots
     *
     * Retrieves a list of all bots within an application.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/bot/listing-bots/list-bots#1-list-bots
     */
    public static function get(?\SendbirdSDK\GetParams\V3\Bots $params = null): \SendbirdSDK\DTOs\ListBotsResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots::class)->get($params);
    }

    /** POST /v3/bots [operationId: createABot] */
    /**
     * Create a bot
     *
     * ## Create a bot
     *
     * Creates a new bot within an application. Creating a bot is similar to creating a normal user, except a callback URL should be specified for a bot to receive events.
     *
     * > **Note**: The bot must first [join a group channel](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels) to interact with users. In group channels, you can also invite a bot through the [invite as members](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel) action.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/creating-a-bot/create-a-bot#1-create-a-bot](https://sendbird.com/docs/chat/platform-api/v3/bot/creating-a-bot/create-a-bot#1-create-a-bot)
     */
    public static function post(?\SendbirdSDK\PostParams\V3\Bots $params = null): \SendbirdSDK\DTOs\Create\ABot\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots::class)->post($params);
    }

    /** DELETE /v3/bots/{bot_userid} [operationId: deleteBotById] */
    /**
     * Delete a bot
     *
     * ## Delete a bot
     *
     * Deletes a bot from an application.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-delete-a-bot
     * ----------------------------
     */
    public static function deleteByBotUserid(string $bot_userid, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\Responses\V3\Bots\ByBotUserid\Delete
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots::class)->deleteByBotUserid($bot_userid, $params);
    }

    /** GET /v3/bots/{bot_userid} [operationId: viewBotById] */
    /**
     * View a bot
     *
     * ## View a bot
     *
     * Retrieves information on a bot.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-view-a-bot
     * ----------------------------
     */
    public static function getByBotUserid(string $bot_userid, ?\SendbirdSDK\GetParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\DTOs\View\BotById\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots::class)->getByBotUserid($bot_userid, $params);
    }

    /** PUT /v3/bots/{bot_userid} [operationId: updateBotById] */
    /**
     * Update a bot
     *
     * ## Update a bot
     *
     * Updates information on a bot.
     *
     * https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-update-a-bot
     * ----------------------------
     */
    public static function putByBotUserid(string $bot_userid, ?\SendbirdSDK\PutParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\DTOs\Update\BotById\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Bots::class)->putByBotUserid($bot_userid, $params);
    }

}
