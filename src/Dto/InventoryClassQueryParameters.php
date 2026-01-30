<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryClassQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryClassQueryParametersFactory testFactory()
 */
class InventoryClassQueryParameters extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
