<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class PostalAddress
{
    /**
     * @var int|null
     */
    public $revision;

    /**
     * @var string|null
     */
    public $regionCode;

    /**
     * @var string|null
     */
    public $languageCode;

    /**
     * @var string|null
     */
    public $postalCode;

    /**
     * @var string|null
     */
    public $sortingCode;

    /**
     * @var string|null
     */
    public $administrativeArea;

    /**
     * @var string|null
     */
    public $locality;

    /**
     * @var string|null
     */
    public $sublocality;

    /**
     * @var string[]
     */
    public $addressLines = [];

    /**
     * @var string[]
     */
    public $recipients = [];

    /**
     * @var string|null
     */
    public $organization;

    /**
     * @param array $googleRequest
     *
     * @return PostalAddress
     */
    public static function fromGoogleRequest(array $googleRequest): PostalAddress
    {
        $postalAddress = new self();

        $postalAddress->revision           = isset($googleRequest['revision']) ? (int)$googleRequest['revision'] : null;
        $postalAddress->regionCode         = isset($googleRequest['regionCode']) ? $googleRequest['regionCode'] : null;
        $postalAddress->languageCode       = isset($googleRequest['languageCode']) ? $googleRequest['languageCode'] : null;
        $postalAddress->postalCode         = isset($googleRequest['postalCode']) ? $googleRequest['postalCode'] : null;
        $postalAddress->sortingCode        = isset($googleRequest['sortingCode']) ? $googleRequest['sortingCode'] : null;
        $postalAddress->administrativeArea = isset($googleRequest['administrativeArea']) ? $googleRequest['administrativeArea'] : null;
        $postalAddress->locality           = isset($googleRequest['locality']) ? $googleRequest['locality'] : null;
        $postalAddress->sublocality        = isset($googleRequest['sublocality']) ? $googleRequest['sublocality'] : null;
        $postalAddress->addressLines       = isset($googleRequest['addressLines']) ? (array)$googleRequest['addressLines'] : [];
        $postalAddress->recipients         = isset($googleRequest['recipients']) ? (array)$googleRequest['recipients'] : [];
        $postalAddress->organization       = isset($googleRequest['organization']) ? $googleRequest['organization'] : null;

        return $postalAddress;
    }
}
