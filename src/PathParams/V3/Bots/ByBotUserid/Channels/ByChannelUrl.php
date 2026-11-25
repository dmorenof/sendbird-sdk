<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Bots\ByBotUserid\Channels;

final class ByChannelUrl extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bot_userid',
        'channel_url',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'bot_userid' => 'bot_userid',
            'channel_url' => 'channel_url',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $bot_userid;
    public string $channel_url;
}
