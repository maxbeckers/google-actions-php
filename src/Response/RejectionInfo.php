<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class RejectionInfo
{
    const TYPE_UNKNOWN          = 'UNKNOWN';
    const TYPE_PAYMENT_DECLINED = 'PAYMENT_DECLINED';

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var string|null
     */
    public $reason;
}
