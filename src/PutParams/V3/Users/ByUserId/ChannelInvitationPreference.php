<?php

declare(strict_types=1);

namespace SendbirdSDK\PutParams\V3\Users\ByUserId;

final class ChannelInvitationPreference extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'api-token' => 'apiToken',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'api-token' => 'apiToken',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'apiToken' => 'api-token',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $apiToken;
    public ?\SendbirdSDK\DTOs\Update\ChannelInvitationPreference\Request $body;
}
