<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Input
{
    /**
     * @var RawInput[]
     */
    public $rawInputs = [];

    /**
     * @var string|null
     */
    public $intent;

    /**
     * @var Argument[]
     */
    public $arguments = [];

    /**
     * @param array $googleRequest
     *
     * @return Input
     */
    public static function fromGoogleRequest(array $googleRequest): Input
    {
        $input = new self();

        if(isset($googleRequest['rawInputs'])) {
            foreach ($googleRequest['rawInputs'] as $rawInput) {
                $input->rawInputs[] = RawInput::fromGoogleRequest($rawInput);
            }
        }
        $input->intent = isset($googleRequest['intent']) ? $googleRequest['intent'] : null;
        if(isset($googleRequest['arguments'])) {
            foreach ($googleRequest['arguments'] as $argument) {
                $input->arguments[] = Argument::fromGoogleRequest($argument);
            }
        }

        return $input;
    }
}
