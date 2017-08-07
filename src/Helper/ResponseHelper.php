<?php

namespace MaxBeckers\GoogleActions\Helper;

use MaxBeckers\GoogleActions\Response\ExpectedIntent;
use MaxBeckers\GoogleActions\Response\InputPrompt;
use MaxBeckers\GoogleActions\Response\Item;
use MaxBeckers\GoogleActions\Response\Response;
use MaxBeckers\GoogleActions\Response\ExpectedInput;
use MaxBeckers\GoogleActions\Response\RichResponse;
use MaxBeckers\GoogleActions\Response\SimpleResponse;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class ResponseHelper
{

    /**
     * @var Response
     */
    public $response;

    /**
     * ResponseHelper constructor creates a new response object.
     */
    public function __construct()
    {
        $this->response = new Response();
    }

    /**
     * @param string $text
     *
     * @return Response
     */
    public function respond(string $text): Response
    {
        $simpleResponse                 = new SimpleResponse();
        $simpleResponse->textToSpeech   = $text;
        $simpleResponse->displayText    = $text;
        $item                           = new Item();
        $item->simpleResponse           = $simpleResponse;
        $richInitialPrompt              = new RichResponse();
        $richInitialPrompt->items[]     = $item;
        $inputPrompt                    = new InputPrompt();
        $inputPrompt->richInitialPrompt = $richInitialPrompt;

        $intent         = new ExpectedIntent();
        $intent->intent = ExpectedIntent::TYPE_TEXT;

        $expectedInput                    = new ExpectedInput();
        $expectedInput->inputPrompt       = $inputPrompt;
        $expectedInput->possibleIntents[] = $intent;

        $this->response->expectedInputs[] = $expectedInput;

        return $this->response;
    }
}
