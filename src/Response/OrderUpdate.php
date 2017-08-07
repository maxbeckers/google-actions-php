<?php

namespace MaxBeckers\GoogleActions\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class OrderUpdate
{
    /**
     * @var OrderState|null
     */
    public $orderState;

    /**
     * @var Action[]
     */
    public $orderManagementActions = [];

    /**
     * @var string|null
     */
    public $updateTime;

    /**
     * @var Price|null
     */
    public $totalPrice;

    /**
     * @var LineItemUpdate|[]
     */
    public $lineItemUpdates = [];

    /**
     * @var UserNotification|null
     */
    public $userNotification;

    /**
     * Todo
     *
     * @var array
     */
    public $infoExtension = [];

    /**
     * @var string|null
     */
    public $googleOrderId;

    /**
     * @var string|null
     */
    public $actionOrderId;

    /**
     * @var RejectionInfo|null
     */
    public $rejectionInfo;

    /**
     * @var Receipt|null
     */
    public $receipt;

    /**
     * @var CancellationInfo|null
     */
    public $cancellationInfo;

    /**
     * @var InTransitInfo|null
     */
    public $inTransitInfo;

    /**
     * @var FulfillmentInfo|null
     */
    public $fulfillmentInfo;

    /**
     * @var ReturnInfo|null
     */
    public $returnInfo;

    /**
     * @param string         $key
     * @param LineItemUpdate $lineItemUpdate
     */
    public function addLineItemUpdate(string $key, LineItemUpdate $lineItemUpdate)
    {
        $this->lineItemUpdates[$key] = $lineItemUpdate;
    }
}
