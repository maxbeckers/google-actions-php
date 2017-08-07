<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Money
{
    /**
     * @var string|null
     */
    public $currencyCode;

    /**
     * @var string|null
     */
    public $units;

    /**
     * @var int|null
     */
    public $nanos;
}
