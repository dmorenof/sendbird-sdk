<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\Users\ByUserId;

final class UnreadChannelCount extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'custom_types' => 'custom_types',
        'super_mode' => 'super_mode',
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
    public ?string $custom_types;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\UnreadChannelCount\Get\Query\SuperModeEnum $super_mode;
}
