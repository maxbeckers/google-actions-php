<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Argument
{
    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string|null
     */
    public $rawText;

    /**
     * @var bool
     */
    public $boolValue = false;

    /**
     * @var string|null
     */
    public $textValue;

    /**
     * @var DateTime|null
     */
    public $datetimeValue;

    /**
     * TODO
     *
     * @var array
     */
    public $extension;

    /**
     * @param array $googleRequest
     *
     * @return Argument
     */
    public static function fromGoogleRequest(array $googleRequest): Argument
    {
        $argument = new self();

        $argument->name          = isset($googleRequest['name']) ? $googleRequest['name'] : null;
        $argument->rawText       = isset($googleRequest['rawText']) ? $googleRequest['rawText'] : null;
        $argument->boolValue     = isset($googleRequest['boolValue']) ? (bool)$googleRequest['boolValue'] : false;
        $argument->textValue     = isset($googleRequest['textValue']) ? $googleRequest['textValue'] : null;
        $argument->datetimeValue = isset($googleRequest['datetimeValue']) ? DateTime::fromGoogleRequest($googleRequest['datetimeValue']) : null;
        // TODO
        $argument->extension = isset($googleRequest['extension']) ? (array)$googleRequest['extension'] : [];

        return $argument;
    }
}
