<?php

declare(strict_types=1);

namespace SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl;

final class Hide extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'should_unhide_all' => 'should_unhide_all',
            'user_id' => 'user_id',
        ],
        'header' => [
            'api-token' => 'apiToken',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'api-token' => 'apiToken',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'apiToken' => 'api-token',
    ];

    public ?string $apiToken;
    public ?bool $should_unhide_all;
    public string $user_id;
}
