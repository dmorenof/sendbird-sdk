<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\Users;

final class ByUserId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'custom_types' => 'custom_types',
            'include_unread_count' => 'include_unread_count',
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
    public ?bool $include_unread_count;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\Get\Query\SuperModeEnum $super_mode;
}
