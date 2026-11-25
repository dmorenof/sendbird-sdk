<?php

declare(strict_types=1);

namespace SendbirdSDK\Collections\Sendbird\Message\Response;

final class FilesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendbirdSDK\DTOs\Sendbird\File::class;
}
