<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Push\DeviceTokens\ByTokenType;

final class ByToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'token',
        'token_type',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'token' => 'token',
            'token_type' => 'token_type',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $token;
    public string $token_type;
}
