<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\MigrateMessages;

final class OneOfFileMessageRequestThumbnailsInner extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string', \SendbirdSDK\DTOs\InnerVariant2DTO::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
        ],
        [
            'kind' => 'object',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
