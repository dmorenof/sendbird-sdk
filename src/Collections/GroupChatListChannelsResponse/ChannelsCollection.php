<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\GroupChatListChannelsResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendbirdSDK\DTOs\Sendbird\GroupChannel> */
final class ChannelsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\GroupChannel::class;
}
