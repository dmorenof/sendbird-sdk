<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3;

final class Bots extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/bots',
        'responseType' => '\\SendbirdSDK\\DTOs\\ListBotsResponse',
    ];

    /**
     * List bots
     *
     * ## List bots
     *
     * Retrieves a list of all bots within an application.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/bot/listing-bots/list-bots#1-list-bots
     */
    public function get(?\SendbirdSDK\GetParams\V3\Bots $params = null): \SendbirdSDK\DTOs\ListBotsResponse
    {
        /** @var \SendbirdSDK\DTOs\ListBotsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/bots',
        'responseType' => '\\SendbirdSDK\\DTOs\\Create\\ABot\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Create\\ABot\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendbirdSDK\PostParams\V3\Bots $params = null): \SendbirdSDK\DTOs\Create\ABot\Response
    {
        /** @var \SendbirdSDK\DTOs\Create\ABot\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_BOT_USERID = [
        'method' => 'DELETE',
        'path' => '/v3/bots/{bot_userid}',
        'responseType' => '\\SendbirdSDK\\Responses\\V3\\Bots\\ByBotUserid\\Delete',
    ];

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
    public function deleteByBotUserid(string $bot_userid, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\Responses\V3\Bots\ByBotUserid\Delete
    {
        /** @var \SendbirdSDK\Responses\V3\Bots\ByBotUserid\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_BOT_USERID), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }

    private const array GET_BY_BOT_USERID = [
        'method' => 'GET',
        'path' => '/v3/bots/{bot_userid}',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\BotById\\Response',
    ];

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
    public function getByBotUserid(string $bot_userid, ?\SendbirdSDK\GetParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\DTOs\View\BotById\Response
    {
        /** @var \SendbirdSDK\DTOs\View\BotById\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BOT_USERID), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }

    private const array PUT_BY_BOT_USERID = [
        'method' => 'PUT',
        'path' => '/v3/bots/{bot_userid}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\BotById\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\BotByIdData',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function putByBotUserid(string $bot_userid, ?\SendbirdSDK\PutParams\V3\Bots\ByBotUserid $params = null): \SendbirdSDK\DTOs\Update\BotById\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\BotById\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_BOT_USERID), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }
}
