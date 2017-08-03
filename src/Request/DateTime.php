<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class DateTime
{
    /**
     * @var Date|null
     */
    public $date;

    /**
     * @var Time|null
     */
    public $time;

    /**
     * @param array $googleRequest
     *
     * @return DateTime
     */
    public static function fromGoogleRequest(array $googleRequest): DateTime
    {
        $dateTime = new self();

        $dateTime->date = isset($googleRequest['date']) ? Date::fromGoogleRequest($googleRequest['date']) : null;
        $dateTime->time = isset($googleRequest['time']) ? Time::fromGoogleRequest($googleRequest['time']) : null;

        return $dateTime;
    }
}
