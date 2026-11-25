<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\InviteAsMembers\Response;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class ReadReceiptMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
