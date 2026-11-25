<?php

declare(strict_types=1);

namespace SendbirdSDK\DeleteParams\V3\OpenChannels\ByChannelUrl;

final class Operators extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'operator_ids',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'delete_all' => 'delete_all',
            'operator_ids' => 'operator_ids',
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
    public ?bool $delete_all;
    public string $operator_ids;
}
