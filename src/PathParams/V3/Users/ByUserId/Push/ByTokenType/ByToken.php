<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Users\ByUserId\Push\ByTokenType;

final class ByToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'token',
    'token_type',
    'user_id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'token' => 'token',
        'token_type' => 'token_type',
        'user_id' => 'user_id',
    ],
    'query' => [],
    'header' => [],
];

    public string $token;
    public \SendbirdSDK\Enums\V3\Users\ByUserId\Push\ByTokenType\ByToken\Delete\Path\TokenTypeEnum $token_type;
    public string $user_id;
}
