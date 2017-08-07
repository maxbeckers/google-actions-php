<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Item
{
    /**
     * @var SimpleResponse|null
     */
    public $simpleResponse;

    /**
     * @var BasicCard|null
     */
    public $basicCard;

    /**
     * @var StructuredResponse|null
     */
    public $structuredResponse;
}
