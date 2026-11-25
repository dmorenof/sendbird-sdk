<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata;

final class ByKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'key',
    'user_id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'key' => 'key',
        'user_id' => 'user_id',
    ],
    'query' => [],
    'header' => [],
];

    public string $key;
    public string $user_id;
}
