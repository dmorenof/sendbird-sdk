<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\MigrateMessages\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendbirdSDK\DTOs\MigrateMessages\OneOfRequestMessagesInner> */
final class MessagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\MigrateMessages\OneOfRequestMessagesInner::class;
}
