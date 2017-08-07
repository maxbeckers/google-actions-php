<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Action
{
    const TYPE_UNKNOWN          = 'UNKNOWN';
    const TYPE_VIEW_DETAILS     = 'VIEW_DETAILS';
    const TYPE_MODIFY           = 'MODIFY';
    const TYPE_CANCEL           = 'CANCEL';
    const TYPE_RETURN           = 'RETURN';
    const TYPE_EXCHANGE         = 'EXCHANGE';
    const TYPE_EMAIL            = 'EMAIL';
    const TYPE_CALL             = 'CALL';
    const TYPE_REORDER          = 'REORDER';
    const TYPE_REVIEW           = 'REVIEW';
    const TYPE_CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var Button|null
     */
    public $button;
}
