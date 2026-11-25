<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\ListBotsResponse;

final class BotsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\ListBotsResponseBotsInner::class;
}
