<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Device
{
    /**
     * @var Location|null
     */
    public $location;

    /**
     * @param array $googleRequest
     *
     * @return Device
     */
    public static function fromGoogleRequest(array $googleRequest): Device
    {
        $device = new self();

        $device->location = isset($googleRequest['location']) ? Location::fromGoogleRequest($googleRequest['location']) : null;

        return $device;
    }
}
