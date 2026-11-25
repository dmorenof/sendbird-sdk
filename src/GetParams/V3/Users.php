<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3;

final class Users extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'active_mode' => 'active_mode',
        'limit' => 'limit',
        'metadatakey' => 'metadatakey',
        'metadatavalues_in' => 'metadatavalues_in',
        'nickname' => 'nickname',
        'nickname_startswith' => 'nickname_startswith',
        'show_bot' => 'show_bot',
        'token' => 'token',
        'user_ids' => 'user_ids',
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
    public ?\SendbirdSDK\Enums\V3\Users\Get\Query\ActiveModeEnum $active_mode;
    public ?int $limit;
    public ?string $metadatakey;
    public ?string $metadatavalues_in;
    public ?string $nickname;
    public ?string $nickname_startswith;
    public ?bool $show_bot;
    public ?string $token;
    public ?string $user_ids;
}
