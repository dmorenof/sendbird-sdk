<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Bots\ByBotUserid;

final class Channels extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/bots/{bot_userid}/channels',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Leave channels - When leaving all channels
     *
     * ## Leave channels
     *
     * Makes a bot leave all group channels.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)
     */
    public function delete(string $bot_userid, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid\Channels $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/bots/{bot_userid}/channels',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\GroupChannelDetail',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\JoinChannelsRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Join channels
     *
     * ## Join channels
     *
     * Makes a bot join one or more group channels.
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels)
     */
    public function post(string $bot_userid, ?\SendbirdSDK\PostParams\V3\Bots\ByBotUserid\Channels $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CHANNEL_URL = [
        'method' => 'DELETE',
        'path' => '/v3/bots/{bot_userid}/channels/{channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Leave channels - When leaving a specific channel
     *
     * ## Leave channels
     *
     * Makes a bot leave a specific channel
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)
     */
    public function deleteByChannelUrl(\SendbirdSDK\PathParams\V3\Bots\ByBotUserid\Channels\ByChannelUrl $identifier, ?\SendbirdSDK\DeleteParams\V3\Bots\ByBotUserid\Channels\ByChannelUrl $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CHANNEL_URL), path: $identifier, parameters: $params);
        return $result;
    }
}
