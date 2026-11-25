<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\GroupChatListChannelsResponse;

final class ChannelsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\GroupChannel::class;
}
