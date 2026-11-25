<?php

declare(strict_types=1);

namespace SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl;

final class Leave extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'Api-Token' => 'ApiToken',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'Api-Token' => 'ApiToken',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'ApiToken' => 'Api-Token',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $ApiToken;
    public ?\SendbirdSDK\DTOs\LeaveAChannelRequest $body;
}
