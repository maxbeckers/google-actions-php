<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class InputPrompt
{
    /**
     * @var RichResponse|null
     */
    public $richInitialPrompt;

    /**
     * @var SimpleResponse[]
     */
    public $noInputPrompts = [];
}
