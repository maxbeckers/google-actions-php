<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class RichResponse
{
    /**
     * @var Item|[]
     */
    public $items = [];

    /**
     * @var Suggestion[]
     */
    public $suggestions = [];

    /**
     * @var LinkOutSuggestion|null
     */
    public $linkOutSuggestion;
}
