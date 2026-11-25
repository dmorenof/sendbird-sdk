<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\GroupChannels\ByChannelUrl\Members;

final class ByUserId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel_url',
    'user_id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'channel_url' => 'channel_url',
        'user_id' => 'user_id',
    ],
    'query' => [],
    'header' => [],
];

    public string $channel_url;
    public string $user_id;
}
