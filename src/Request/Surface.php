<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Surface
{
    /**
     * @var Capability[]
     */
    public $capabilities = [];

    /**
     * @param array $googleRequest
     *
     * @return Surface
     */
    public static function fromGoogleRequest(array $googleRequest): Surface
    {
        $surface = new self();

        if(isset($googleRequest['capabilities'])) {
            foreach ($googleRequest['capabilities'] as $capability) {
                $surface->capabilities[] = Capability::fromGoogleRequest($capability);
            }
        }

        return $surface;
    }
}
