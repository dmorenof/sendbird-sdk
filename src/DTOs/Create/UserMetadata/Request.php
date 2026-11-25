<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\UserMetadata;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'metadata',
];

    public \SendbirdSDK\DTOs\Create\UserMetadata\Request\MetadataDTO $metadata;

}
