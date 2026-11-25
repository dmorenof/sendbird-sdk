<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\ListOpenChannelsResponse;

final class ChannelsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\OpenChannel::class;
}
