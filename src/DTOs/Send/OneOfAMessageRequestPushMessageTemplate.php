<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send;

final class OneOfAMessageRequestPushMessageTemplate extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string', \SendbirdSDK\DTOs\Send\AMessageRequestPushMessageTemplateOneOf::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
        ],
        [
            'kind' => 'reference',
            'ref' => 'sendAMessage_request_push_message_template_oneOf',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'sendAMessage_request_push_message_template_oneOf' => [
            'kind' => 'object',
            'properties' => [
                'body' => [
                    'kind' => 'string',
                ],
                'title' => [
                    'kind' => 'string',
                ],
            ],
        ],
    ];
}
