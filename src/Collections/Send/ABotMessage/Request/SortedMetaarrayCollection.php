<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Send\ABotMessage\Request;

final class SortedMetaarrayCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class;
}
