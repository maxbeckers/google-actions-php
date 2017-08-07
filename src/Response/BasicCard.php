<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class BasicCard
{
    /**
     * @var string|null
     */
    public $title;

    /**
     * @var string|null
     */
    public $subtitle;

    /**
     * @var string|null
     */
    public $formattedText;

    /**
     * @var Image|null
     */
    public $image;

    /**
     * @var Button[]
     */
    public $buttons = [];
}
