<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\Users\ByUserId;

final class Block extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit' => 'limit',
        'list' => 'list_',
        'metadatakey' => 'metadatakey',
        'metadatavalues_in' => 'metadatavalues_in',
        'token' => 'token',
        'user_ids' => 'user_ids',
    ],
    'header' => [
        'api-token' => 'apiToken',
    ],
];

    protected const array PROPERTY_MAP = [
    'api-token' => 'apiToken',
    'list' => 'list_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'apiToken' => 'api-token',
    'list_' => 'list',
];

    public ?string $apiToken;
    public ?int $limit;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\Block\Get\Query\QueryListEnum $list_;
    public ?string $metadatakey;
    public ?string $metadatavalues_in;
    public ?string $token;
    public ?string $user_ids;
}
