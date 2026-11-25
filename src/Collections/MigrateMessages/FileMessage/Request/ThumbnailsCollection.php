<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\MigrateMessages\FileMessage\Request;

final class ThumbnailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\MigrateMessages\OneOfFileMessageRequestThumbnailsInner::class;
}
