<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class User
{
    const PERMISSION_UNSPECIFIED_PERMISSION  = 'UNSPECIFIED_PERMISSION';
    const PERMISSION_NAME                    = 'NAME';
    const PERMISSION_DEVICE_PRECISE_LOCATION = 'DEVICE_PRECISE_LOCATION';
    const PERMISSION_DEVICE_COARSE_LOCATION  = 'DEVICE_COARSE_LOCATION';

    /**
     * @var string|null
     */
    public $userId;

    /**
     * @var UserProfile|null
     */
    public $profile;

    /**
     * @var string|null
     */
    public $accessToken;

    /**
     * @var string[]
     */
    public $permissions = [];

    /**
     * @var string|null
     */
    public $locale;

    /**
     * @param array $googleRequest
     *
     * @return User
     */
    public static function fromGoogleRequest(array $googleRequest): User
    {
        $user = new self();

        $user->userId      = isset($googleRequest['userId']) ? $googleRequest['userId'] : null;
        $user->profile     = isset($googleRequest['profile']) ? UserProfile::fromGoogleRequest($googleRequest['profile']) : null;
        $user->accessToken = isset($googleRequest['accessToken']) ? $googleRequest['accessToken'] : null;
        $user->permissions = isset($googleRequest['permissions']) ? (array)$googleRequest['permissions'] : [];
        $user->locale      = isset($googleRequest['locale']) ? $googleRequest['locale'] : null;

        return $user;
    }
}
