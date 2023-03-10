<?php

namespace Ecommerce\Common\Events\Warehouse;

use Ecommerce\Common\DataTransferObjects\Warehouse\InventoryData;
use Ecommerce\Common\Enums\Events;
use Ecommerce\Common\Events\Event;

class InventoryUpdatedEvent extends Event
{
    public string $type = Events::INVENTORY_UPDATED;

    public function __construct(public InventoryData $data)
    {
    }
}
