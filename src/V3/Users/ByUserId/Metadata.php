<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Users\ByUserId;

final class Metadata extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/users/{user_id}/metadata [operationId: deleteUserAllMetadata] */
    /**
     * Delete user metadata
     *
     * ## Delete metadata You can delete a specific or all metadata of a user. Metadata stores additional user information such as their preference settings.
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-delete-metadata
     */
    public static function delete(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->delete($user_id, $params);
    }

    /** POST /v3/users/{user_id}/metadata [operationId: createUserMetadata] */
    /**
     * Create user metadata
     *
     * ## Create metadata When creating new items of the user metadata. https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-create-metadata
     */
    public static function post(string $user_id, ?\SendbirdSDK\PostParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\View\AUserMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->post($user_id, $params);
    }

    /** PUT /v3/users/{user_id}/metadata [operationId: updateUserMetadata] */
    /**
     * Update user metadata
     *
     * ## Update metadata When updating existing items of the user metadata by their keys or adding new items to the metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-update-metadata
     */
    public static function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\Update\UserMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->put($user_id, $params);
    }

    /** DELETE /v3/users/{user_id}/metadata/{key} [operationId: deleteSpecificUserMetadata] */
    /**
     * Delete user metadata
     *
     * ## Delete metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-delete-metadata
     */
    public static function deleteByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->deleteByKey($identifier, $params);
    }

    /** GET /v3/users/{user_id}/metadata/{key} [operationId: viewSpecificUserMetadata] */
    /**
     * Get specific user metadata
     *
     * ## Get metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-get-metadata
     */
    public static function getByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\View\AUserMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->getByKey($identifier, $params);
    }

    /** PUT /v3/users/{user_id}/metadata/{key} [operationId: updateSpecificUserMetadata] */
    /**
     * Update specific user metadata
     *
     * ## Update metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-update-metadata
     */
    public static function putByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\Update\UserMetadata\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Users\ByUserId\Metadata::class)->putByKey($identifier, $params);
    }

}
