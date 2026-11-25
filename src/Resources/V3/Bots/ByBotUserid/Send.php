<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Bots\ByBotUserid;

final class Send extends \SendbirdSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/bots/{bot_userid}/send',
        'responseType' => '\\SendbirdSDK\\DTOs\\Send\\ABotMessage\\Response',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'apns_bundle_id' => [
                'contentType' => 'text/plain',
            ],
            'apple_critical_alert_options' => [
                'contentType' => 'application/json',
                'json' => true,
            ],
            'channel_url' => [
                'contentType' => 'text/plain',
            ],
            'created_at' => [
                'contentType' => 'text/plain',
            ],
            'custom_type' => [
                'contentType' => 'text/plain',
            ],
            'data' => [
                'contentType' => 'text/plain',
            ],
            'dedup_id' => [
                'contentType' => 'text/plain',
            ],
            'extended_message_payload' => [
                'contentType' => 'application/json',
                'json' => true,
            ],
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
            'is_silent' => [
                'contentType' => 'text/plain',
            ],
            'mark_as_read' => [
                'contentType' => 'text/plain',
            ],
            'mention_type' => [
                'contentType' => 'text/plain',
            ],
            'mentioned' => [
                'contentType' => 'text/plain',
            ],
            'mentioned_user_ids' => [
                'contentType' => 'text/plain',
            ],
            'message' => [
                'contentType' => 'text/plain',
            ],
            'message_type' => [
                'contentType' => 'text/plain',
            ],
            'require_auth' => [
                'contentType' => 'text/plain',
            ],
            'send_push' => [
                'contentType' => 'text/plain',
            ],
            'sorted_metaarray' => [
                'contentType' => 'application/json',
                'json' => true,
            ],
            'sound' => [
                'contentType' => 'text/plain',
            ],
            'volume' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

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
    public function post(string $bot_userid, ?\SendbirdSDK\PostParams\V3\Bots\ByBotUserid\Send $params = null): \SendbirdSDK\DTOs\Send\ABotMessage\Response
    {
        /** @var \SendbirdSDK\DTOs\Send\ABotMessage\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['bot_userid' => $bot_userid], parameters: $params);
        return $result;
    }

}
