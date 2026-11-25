<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Path;

enum ChannelTypeEnum: string
{
    case GroupChannels = 'group_channels';
    case OpenChannels = 'open_channels';
}
