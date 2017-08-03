<?php

namespace MaxBeckers\GoogleActions\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class Request
{
    /**
     * @var User|null
     */
    public $user;

    /**
     * @var Device|null
     */
    public $device;

    /**
     * @var Surface|null
     */
    public $surface;

    /**
     * @var Conversation|null
     */
    public $conversation;

    /**
     * @var Input[]
     */
    public $inputs = [];

    /**
     * @var bool|null
     */
    public $isInSandbox;

    /**
     * @param string $googleRequestBody
     *
     * @return Request
     */
    public static function fromGoogleRequest(string $googleRequestBody): Request
    {
        $request = new self();

        $googleRequest = json_decode($googleRequestBody, true);

        $request->user         = isset($googleRequest['user']) ? User::fromGoogleRequest($googleRequest['user']) : null;
        $request->device       = isset($googleRequest['device']) ? Device::fromGoogleRequest($googleRequest['device']) : null;
        $request->surface      = isset($googleRequest['surface']) ? Surface::fromGoogleRequest($googleRequest['surface']) : null;
        $request->conversation = isset($googleRequest['conversation']) ? Conversation::fromGoogleRequest($googleRequest['conversation']) : null;
        if (isset($googleRequest['inputs'])) {
            foreach ($googleRequest['inputs'] as $input) {
                $request->inputs[] = Input::fromGoogleRequest($input);
            }
        }
        $request->isInSandbox = isset($googleRequest['isInSandbox']) ? (bool)$googleRequest['isInSandbox'] : false;

        return $request;
    }
}
