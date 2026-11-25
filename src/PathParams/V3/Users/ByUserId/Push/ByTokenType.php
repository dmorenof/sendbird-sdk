<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Users\ByUserId\Push;

final class ByTokenType extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'token_type',
    'user_id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'token_type' => 'token_type',
        'user_id' => 'user_id',
    ],
    'query' => [],
    'header' => [],
];

    public \SendbirdSDK\Enums\V3\Users\ByUserId\Push\ByTokenType\Get\Path\TokenTypeEnum $token_type;
    public string $user_id;
}
