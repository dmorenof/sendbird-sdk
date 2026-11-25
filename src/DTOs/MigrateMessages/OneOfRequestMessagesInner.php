<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\MigrateMessages;

final class OneOfRequestMessagesInner extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\SendbirdSDK\DTOs\MigrateMessages\TextMessage\Request::class, \SendbirdSDK\DTOs\MigrateMessages\FileMessage\Request::class, \SendbirdSDK\DTOs\MigrateMessages\AdminMessage\Request::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'MigrateMessagesTextMessageRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => 'MigrateMessagesFileMessageRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => 'MigrateMessagesAdminMessageRequest',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'MigrateMessagesAdminMessageRequest' => [
            'kind' => 'object',
            'properties' => [
                'custom_type' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 128,
                    ],
                ],
                'data' => [
                    'kind' => 'string',
                ],
                'dedup_id' => [
                    'kind' => 'string',
                ],
                'is_silent' => [
                    'kind' => 'boolean',
                ],
                'mentioned_user_ids' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'message' => [
                    'kind' => 'string',
                ],
                'message_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'ADMM',
                    ],
                ],
                'sorted_metaarray' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'timestamp' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'message',
                'message_type',
                'timestamp',
            ],
        ],
        'MigrateMessagesFileMessageRequest' => [
            'kind' => 'object',
            'properties' => [
                'custom_field' => [
                    'kind' => 'string',
                ],
                'custom_type' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 128,
                    ],
                ],
                'dedup_id' => [
                    'kind' => 'string',
                ],
                'file_name' => [
                    'kind' => 'string',
                ],
                'file_size' => [
                    'kind' => 'integer',
                ],
                'file_type' => [
                    'kind' => 'string',
                ],
                'mentioned_user_ids' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'message_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'FILE',
                    ],
                ],
                'require_auth' => [
                    'kind' => 'boolean',
                ],
                'sorted_metaarray' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'thumbnails' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'MigrateMessagesFileMessageRequest_thumbnails_inner',
                    ],
                ],
                'timestamp' => [
                    'kind' => 'integer',
                ],
                'url' => [
                    'kind' => 'string',
                ],
                'user_id' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'message_type',
                'timestamp',
                'url',
                'user_id',
            ],
        ],
        'MigrateMessagesFileMessageRequest_thumbnails_inner' => [
            'kind' => 'oneOf',
            'branches' => [
                [
                    'kind' => 'string',
                ],
                [
                    'kind' => 'object',
                ],
            ],
        ],
        'MigrateMessagesTextMessageRequest' => [
            'kind' => 'object',
            'properties' => [
                'custom_type' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 128,
                    ],
                ],
                'data' => [
                    'kind' => 'string',
                ],
                'dedup_id' => [
                    'kind' => 'string',
                ],
                'mentioned_user_ids' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'message' => [
                    'kind' => 'string',
                ],
                'message_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'MESG',
                    ],
                ],
                'sorted_metaarray' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'timestamp' => [
                    'kind' => 'integer',
                ],
                'user_id' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'message',
                'message_type',
                'timestamp',
                'user_id',
            ],
        ],
    ];
}
