<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\InviteAsMembers\Request;

/**
 * Specifies one or more key-value pair items which set the invitation status of each user invited to the channel. The key should be a user_id and the value should be their joining status. Acceptable values are joined, invited_by_friend, and invited_by_non_friend. (Default: joined)
 */
final class InvitationStatusDTO extends \Dmorenof\SdkRuntime\DTO
{
}
