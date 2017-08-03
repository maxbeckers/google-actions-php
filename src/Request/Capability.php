<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Capability
{
    /**
     * @var string|null
     */
    public $name;

    /**
     * @param array $googleRequest
     *
     * @return Capability
     */
    public static function fromGoogleRequest(array $googleRequest): Capability
    {
        $capability = new self();

        $capability->name = isset($googleRequest['name']) ? $googleRequest['name'] : null;

        return $capability;
    }
}
