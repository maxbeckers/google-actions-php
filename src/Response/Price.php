<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Price
{
    const TYPE_UNKNOWN  = 'UNKNOWN';
    const TYPE_ESTIMATE = 'ESTIMATE';
    const TYPE_ACTUAL   = 'ACTUAL';

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var Money|null
     */
    public $amount;
}
