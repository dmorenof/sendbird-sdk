# Sendbird SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/sendbird-sdk.svg)](https://packagist.org/packages/dmorenof/sendbird-sdk)

**Sendbird Chat platform API (users, channels, messages, moderation) as typed PHP.**

Manage users, group and open channels, messages, moderation, bots and announcements from your server with typed calls generated from Sendbird's Platform API contract.

> Unofficial. Not affiliated with, endorsed by or supported by Sendbird. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 92 operations behind your application's own server.
- The app id goes into the server URL; the API token is a typed header parameter.
- Typed models for messages, channels and users.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/sendbird-openapi.yaml` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 92 operations and 173 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/sendbird-sdk
```

## Quick start

```php
<?php
use SendbirdSDK\Configuration;
use SendbirdSDK\SendbirdPlatformSDK;
use SendbirdSDK\GetParams\V3\Applications\Dau as DauParams;
use SendbirdSDK\V3\Applications\Dau;

$configuration = new Configuration();
$configuration->serverVariables = ['app_id' => getenv('SENDBIRD_APP_ID') ?: ''];
SendbirdPlatformSDK::configure($configuration);

$users = Dau::get(new DauParams((object) ['ApiToken' => getenv('SENDBIRD_API_TOKEN') ?: '']));

echo json_encode($users), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

92 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `users` | 34 |
| `group_channels` | 21 |
| `bots` | 9 |
| `open_channels` | 9 |
| `messages` | 9 |
| `metadata` | 4 |
| `applications` | 2 |
| `push` | 2 |
| `announcements` | 1 |
| `migration` | 1 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Sendbird publishes official libraries; this one is generated and unofficial.
- The contract had defects the generator repaired (see NOTICE.md).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://sendbird.com/docs/chat/platform-api)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
