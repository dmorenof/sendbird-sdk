<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\GroupChannels;

final class ByChannelUrl extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'member_active_mode' => 'member_active_mode',
        'show_delivery_receipt' => 'show_delivery_receipt',
        'show_member' => 'show_member',
        'show_read_receipt' => 'show_read_receipt',
        'user_id' => 'user_id',
    ],
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

    public ?string $apiToken;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Get\Query\ActiveModeEnum $member_active_mode;
    public ?bool $show_delivery_receipt;
    public ?bool $show_member;
    public ?bool $show_read_receipt;
    public ?string $user_id;
}
