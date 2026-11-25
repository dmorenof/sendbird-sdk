<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3;

final class OpenChannels extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'channel_urls' => 'channel_urls',
        'custom_types' => 'custom_types',
        'limit' => 'limit',
        'name_contains' => 'name_contains',
        'show_frozen' => 'show_frozen',
        'show_metadata' => 'show_metadata',
        'token' => 'token',
        'url_contains' => 'url_contains',
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
    public ?string $channel_urls;
    public ?string $custom_types;
    public ?int $limit;
    public ?string $name_contains;
    public ?bool $show_frozen;
    public ?bool $show_metadata;
    public ?string $token;
    public ?string $url_contains;
}
