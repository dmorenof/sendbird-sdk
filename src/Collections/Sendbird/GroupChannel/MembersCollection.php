<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Sendbird\GroupChannel;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendbirdSDK\DTOs\Sendbird\Member> */
final class MembersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\Member::class;
}
