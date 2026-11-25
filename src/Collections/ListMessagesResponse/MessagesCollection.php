<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\ListMessagesResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendbirdSDK\DTOs\Sendbird\Message\Response> */
final class MessagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\Message\Response::class;
}
