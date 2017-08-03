<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class LatLng
{
    /**
     * @var float|null
     */
    public $latitude;

    /**
     * @var float|null
     */
    public $longitude;

    /**
     * @param array $googleRequest
     *
     * @return LatLng
     */
    public static function fromGoogleRequest(array $googleRequest): LatLng
    {
        $latLng = new self();

        $latLng->latitude  = isset($googleRequest['latitude']) ? (float)$googleRequest['latitude'] : null;
        $latLng->longitude = isset($googleRequest['longitude']) ? (float)$googleRequest['longitude'] : null;

        return $latLng;
    }
}
