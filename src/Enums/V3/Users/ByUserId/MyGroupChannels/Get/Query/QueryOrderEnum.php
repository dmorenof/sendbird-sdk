<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query;

enum QueryOrderEnum: string
{
    case ChannelNameAlphabetical = 'channel_name_alphabetical';
    case Chronological = 'chronological';
    case LatestLastMessage = 'latest_last_message';
    case MetadataValueAlphabetical = 'metadata_value_alphabetical';
}
