<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Status
{
    /**
     * @var int|null
     */
    public $code;

    /**
     * @var string|null
     */
    public $message;

    /**
     * todo
     *
     * @var array
     */
    public $details = [];
}
