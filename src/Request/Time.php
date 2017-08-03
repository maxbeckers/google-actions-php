<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Time
{
    /**
     * @var int|null
     */
    public $hours;

    /**
     * @var int|null
     */
    public $minutes;

    /**
     * @var int|null
     */
    public $seconds;

    /**
     * @var int|null
     */
    public $nanos;

    /**
     * @param array $googleRequest
     *
     * @return Time
     */
    public static function fromGoogleRequest(array $googleRequest): Time
    {
        $time = new self();

        $time->hours   = isset($googleRequest['hours']) ? (int)$googleRequest['hours'] : null;
        $time->minutes = isset($googleRequest['minutes']) ? (int)$googleRequest['minutes'] : null;
        $time->seconds = isset($googleRequest['seconds']) ? (int)$googleRequest['seconds'] : null;
        $time->nanos   = isset($googleRequest['nanos']) ? (int)$googleRequest['nanos'] : null;

        return $time;
    }
}
