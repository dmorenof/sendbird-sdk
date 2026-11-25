<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId;

final class SortedMetaarray extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel_type',
        'channel_url',
        'message_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'channel_type' => 'channel_type',
            'channel_url' => 'channel_url',
            'message_id' => 'message_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public \SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray\Delete\Path\ChannelTypeEnum $channel_type;
    public string $channel_url;
    public int $message_id;
}
