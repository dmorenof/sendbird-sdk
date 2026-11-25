<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Sendbird\Message\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendbirdSDK\DTOs\Sendbird\BasicUserInfo> */
final class MentionedUsersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\BasicUserInfo::class;
}
