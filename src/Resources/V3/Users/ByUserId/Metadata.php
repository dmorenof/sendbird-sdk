<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class Metadata extends \SendbirdSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Delete user metadata
     *
     * ## Delete metadata You can delete a specific or all metadata of a user. Metadata stores additional user information such as their preference settings.
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-delete-metadata
     */
    public function delete(string $user_id, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/users/{user_id}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\AUserMetadata\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Create\\UserMetadata\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create user metadata
     *
     * ## Create metadata When creating new items of the user metadata. https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-create-metadata
     */
    public function post(string $user_id, ?\SendbirdSDK\PostParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\View\AUserMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\View\AUserMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/metadata',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\UserMetadata\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\UserMetadata\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update user metadata
     *
     * ## Update metadata When updating existing items of the user metadata by their keys or adding new items to the metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-update-metadata
     */
    public function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\Metadata $params = null): \SendbirdSDK\DTOs\Update\UserMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\UserMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_KEY = [
        'method' => 'DELETE',
        'path' => '/v3/users/{user_id}/metadata/{key}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
    ];

    /**
     * Delete user metadata
     *
     * ## Delete metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-delete-metadata
     */
    public function deleteByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\DeleteParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_KEY), path: $identifier, parameters: $params);
        return $result;
    }

    private const array GET_BY_KEY = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/metadata/{key}',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\AUserMetadata\\Response',
    ];

    /**
     * Get specific user metadata
     *
     * ## Get metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-get-metadata
     */
    public function getByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\View\AUserMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\View\AUserMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_KEY), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PUT_BY_KEY = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/metadata/{key}',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\UserMetadata\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\SpecificUserMetadata\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update specific user metadata
     *
     * ## Update metadata
     * https://sendbird.com/docs/chat/platform-api/v3/user/managing-metadata/user-update-metadata
     */
    public function putByKey(\SendbirdSDK\PathParams\V3\Users\ByUserId\Metadata\ByKey $identifier, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\Metadata\ByKey $params = null): \SendbirdSDK\DTOs\Update\UserMetadata\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\UserMetadata\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_KEY), path: $identifier, parameters: $params);
        return $result;
    }

}
