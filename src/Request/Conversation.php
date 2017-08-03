<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Conversation
{
    const TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
    const TYPE_NEW         = 'NEW';
    const TYPE_ACTIVE      = 'ACTIVE';

    /**
     * @var string|null
     */
    public $conversationId;

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var string|null
     */
    public $conversationToken;

    /**
     * @param array $googleRequest
     *
     * @return Conversation
     */
    public static function fromGoogleRequest(array $googleRequest): Conversation
    {
        $conversation = new self();

        $conversation->conversationId    = isset($googleRequest['conversationId']) ? $googleRequest['conversationId'] : null;
        $conversation->type              = isset($googleRequest['type']) ? $googleRequest['type'] : null;
        $conversation->conversationToken = isset($googleRequest['conversationToken']) ? $googleRequest['conversationToken'] : null;

        return $conversation;
    }
}
