<?php

declare(strict_types=1);

namespace SendbirdSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [];
    protected const array SERVERS = [
        [
            'url' => 'https://api-{app_id}.sendbird.com',
            'variables' => [
                'app_id' => [
                    'default' => 'APP_ID',
                ],
            ],
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
