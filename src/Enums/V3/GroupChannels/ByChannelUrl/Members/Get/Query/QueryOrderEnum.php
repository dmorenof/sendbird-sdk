<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query;

enum QueryOrderEnum: string
{
    case MemberNicknameAlphabetical = 'member_nickname_alphabetical';
    case OperatorThenMemberAlphabetical = 'operator_then_member_alphabetical';
}
