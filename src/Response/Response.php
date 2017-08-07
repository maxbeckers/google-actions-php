<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Response
{
    /**
     * @var string|null
     */
    public $conversationToken;

    /**
     * @var bool
     */
    public $expectUserResponse = false;

    /**
     * @var ExpectedInput[]
     */
    public $expectedInputs = [];

    /**
     * @var FinalResponse|null
     */
    public $finalResponse;

    /**
     * @var CustomPushMessage|null
     */
    public $customPushMessage;

    /**
     * @var ResponseMetadata|null
     */
    public $responseMetadata;

    /**
     * @var bool
     */
    public $isInSandbox = false;
}
