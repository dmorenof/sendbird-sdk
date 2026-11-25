<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\MigrateMessages\AdminMessage\Request;

final class SortedMetaarrayCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\MigrateMessages\AdminMessage\Request\SortedMetaarrayDTO::class;
}
