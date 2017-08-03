<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Date
{
    /**
     * @var int|null
     */
    public $year;

    /**
     * @var int|null
     */
    public $month;

    /**
     * @var int|null
     */
    public $day;

    /**
     * @param array $googleRequest
     *
     * @return Date
     */
    public static function fromGoogleRequest(array $googleRequest): Date
    {
        $date = new self();

        $date->year  = isset($googleRequest['year']) ? (int)$googleRequest['year'] : null;
        $date->month = isset($googleRequest['month']) ? (int)$googleRequest['month'] : null;
        $date->day   = isset($googleRequest['day']) ? (int)$googleRequest['day'] : null;

        return $date;
    }
}
