<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class LineItemUpdate
{
    /**
     * @var OrderState|null
     */
    public $orderState;

    /**
     * @var Price|null
     */
    public $price;

    /**
     * @var string|null
     */
    public $reason;
}
