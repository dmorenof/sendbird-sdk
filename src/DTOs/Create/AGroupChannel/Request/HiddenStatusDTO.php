<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AGroupChannel\Request;

/**
 * Specifies one or more key-value pair items which set the channel's hidden status for each user. The key should be a user_id and the value should be their hidden status. Acceptable values are limited to the following:<br />- unhidden (default): the channel is included in when retrieving a list of group channels.<br />- hidden_allow_auto_unhide: the channel automatically gets unhidden when receiving a new message.<br />- hidden_prevent_auto_unhide: the channel keeps hidden though receiving a new message.
 */
final class HiddenStatusDTO extends \Dmorenof\SdkRuntime\DTO
{
}
