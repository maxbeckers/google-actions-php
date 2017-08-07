<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class ExpectedIntent
{
    const TYPE_TEXT = 'actions.intent.TEXT';

    /**
     * @var string|null
     */
    public $intent;

    /**
     * Todo
     *
     * @var array
     */
    public $inputValueData = [];
}
