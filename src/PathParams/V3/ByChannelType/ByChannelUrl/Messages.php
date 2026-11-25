<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel_type',
        'channel_url',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'channel_type' => 'channel_type',
            'channel_url' => 'channel_url',
        ],
        'query' => [],
        'header' => [],
    ];

    public \SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Path\ChannelTypeEnum $channel_type;
    public string $channel_url;
}
