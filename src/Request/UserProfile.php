<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class UserProfile
{
    /**
     * @var string|null
     */
    public $displayName;

    /**
     * @var string|null
     */
    public $givenName;

    /**
     * @var string|null
     */
    public $familyName;

    /**
     * @param array $googleRequest
     *
     * @return UserProfile
     */
    public static function fromGoogleRequest(array $googleRequest): UserProfile
    {
        $userProfile = new self();

        $userProfile->displayName = isset($googleRequest['displayName']) ? $googleRequest['displayName'] : null;
        $userProfile->givenName   = isset($googleRequest['givenName']) ? $googleRequest['givenName'] : null;
        $userProfile->familyName  = isset($googleRequest['familyName']) ? $googleRequest['familyName'] : null;

        return $userProfile;
    }
}
