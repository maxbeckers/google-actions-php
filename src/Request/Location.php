<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Location
{
    /**
     * @var LatLng|null
     */
    public $coordinates;

    /**
     * @var string|null
     */
    public $formattedAddress;

    /**
     * @var string|null
     */
    public $zipCode;

    /**
     * @var string|null
     */
    public $city;

    /**
     * @var PostalAddress|null
     */
    public $postalAddress;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string|null
     */
    public $phoneNumber;

    /**
     * @var string|null
     */
    public $notes;

    /**
     * @param array $googleRequest
     *
     * @return Location
     */
    public static function fromGoogleRequest(array $googleRequest): Location
    {
        $location = new self();

        $location->coordinates      = isset($googleRequest['coordinates']) ? LatLng::fromGoogleRequest($googleRequest['coordinates']) : null;
        $location->formattedAddress = isset($googleRequest['formattedAddress']) ? $googleRequest['formattedAddress'] : null;
        $location->zipCode          = isset($googleRequest['zipCode']) ? $googleRequest['zipCode'] : null;
        $location->city             = isset($googleRequest['city']) ? $googleRequest['city'] : null;
        $location->postalAddress    = isset($googleRequest['postalAddress']) ? PostalAddress::fromGoogleRequest($googleRequest['postalAddress']) : null;
        $location->name             = isset($googleRequest['name']) ? $googleRequest['name'] : null;
        $location->phoneNumber      = isset($googleRequest['phoneNumber']) ? $googleRequest['phoneNumber'] : null;
        $location->notes            = isset($googleRequest['notes']) ? $googleRequest['notes'] : null;

        return $location;
    }
}
