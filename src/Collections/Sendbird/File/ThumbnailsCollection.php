<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Sendbird\File;

final class ThumbnailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\Thumbnail::class;
}
