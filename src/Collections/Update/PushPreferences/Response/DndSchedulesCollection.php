<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Update\PushPreferences\Response;

final class DndSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Update\PushPreferencesRequestDndSchedulesInner::class;
}
