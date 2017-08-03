<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class RawInput
{
    const INPUT_TYPE_UNSPECIFIED = 'UNSPECIFIED_INPUT_TYPE';
    const INPUT_TYPE_TOUCH       = 'TOUCH';
    const INPUT_TYPE_VOICE       = 'VOICE';
    const INPUT_TYPE_KEYBOARD    = 'KEYBOARD';

    /**
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds. Example: "2014-10-02T15:01:23.045123456Z".
     *
     * @var string|null
     */
    public $createTime;

    /**
     * @var string|null
     */
    public $inputType;

    /**
     * @var string|null
     */
    public $query;

    /**
     * @param array $googleRequest
     *
     * @return RawInput
     */
    public static function fromGoogleRequest(array $googleRequest): RawInput
    {
        $rawInput = new self();

        $rawInput->createTime = isset($googleRequest['createTime']) ? $googleRequest['createTime'] : null;
        $rawInput->inputType  = isset($googleRequest['inputType']) ? $googleRequest['inputType'] : null;
        $rawInput->query      = isset($googleRequest['query']) ? $googleRequest['query'] : null;

        return $rawInput;
    }
}
