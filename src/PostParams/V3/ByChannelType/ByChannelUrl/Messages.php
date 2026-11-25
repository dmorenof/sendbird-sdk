<?php

declare(strict_types=1);

namespace SendbirdSDK\PostParams\V3\ByChannelType\ByChannelUrl;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
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

    public const bool OPERATION_BODY = true;

    public ?string $apiToken;
    public ?\SendbirdSDK\DTOs\Send\AMessage\Request $body;
}
