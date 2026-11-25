<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\MigrateMessages\TextMessage\Request;

final class SortedMetaarrayCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\MigrateMessages\TextMessage\Request\SortedMetaarrayDTO::class;
}
