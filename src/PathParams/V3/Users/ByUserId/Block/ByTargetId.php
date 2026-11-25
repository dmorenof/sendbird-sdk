<?php

declare(strict_types=1);

namespace SendbirdSDK\PathParams\V3\Users\ByUserId\Block;

final class ByTargetId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'target_id',
    'user_id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'target_id' => 'target_id',
        'user_id' => 'user_id',
    ],
    'query' => [],
    'header' => [],
];

    public string $target_id;
    public string $user_id;
}
