# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Sendbird.

- Sendbird and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the Sendbird API or its terms. Sendbird publishes an official PHP library (`sendbird/sendbird-platform-sdk-php`); this one is generated from the contract.
- The contract in `contract/sendbird-openapi.yaml` is the OpenAPI document of Sendbird's Platform API SDK, downloaded from <https://github.com/sendbird/sendbird-platform-sdk-java> (`api/openapi.yaml`) in November 2026. That document is defective in places (a `type: string` beside a `oneOf` of objects, a path parameter that is not in the path); the generator repaired them and the generation report lists each.
- Using the API requires a Sendbird application ID and an API token and compliance with its terms. The server is `https://api-{app_id}.sendbird.com`; each operation takes the `Api-Token` header as a parameter.
- Provided without warranty.
