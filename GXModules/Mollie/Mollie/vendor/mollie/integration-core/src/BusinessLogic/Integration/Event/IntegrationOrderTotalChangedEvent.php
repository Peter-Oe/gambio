<?php

namespace Mollie\BusinessLogic\Integration\Event;

use Mollie\Infrastructure\Utility\Events\Event;

/**
 * Class IntegrationOrderTotalChangedEvent
 *
 * @package Mollie\BusinessLogic\Integration\Event
 */
class IntegrationOrderTotalChangedEvent extends Event
{
    /**
     * Fully qualified name of this class.
     */
    const CLASS_NAME = __CLASS__;

    /**
     * @var string
     */
    protected $shopReference;

    /**
     * IntegrationOrderTotalChangedEvent constructor.
     *
     * @param string $shopReference
     */
    public function __construct($shopReference)
    {
        $this->shopReference = $shopReference;
    }

    /**
     * @return string
     */
    public function getShopReference()
    {
        return $this->shopReference;
    }
}
