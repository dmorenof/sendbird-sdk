<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\Applications;

final class Dau extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'date' => 'date',
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
    public ?string $date;
}
