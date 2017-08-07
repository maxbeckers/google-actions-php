<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class ExpectedInput
{
    /**
     * @var InputPrompt|null
     */
    public $inputPrompt;

    /**
     * @var ExpectedIntent[]
     */
    public $possibleIntents = [];

    /**
     * @var string[]
     */
    public $speechBiasingHints = [];
}
