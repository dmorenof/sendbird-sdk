<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\ListMessagesResponse;

final class MessagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\Message\Response::class;
}
