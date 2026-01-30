<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventorySummaryQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventorySummaryQueryParametersFactory testFactory()
 */
class InventorySummaryQueryParameters extends Model
{
    public function __construct(
        public ?string $warehouse = null,
        public ?string $location = null,
    ) {}
}
