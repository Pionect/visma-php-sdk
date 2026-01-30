<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateShipmentActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateShipmentActionDtoFactory factory()
 */
class CreateShipmentActionDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?bool $returnShipmentDto = null,
        public ?\Carbon\Carbon $shipmentDate = null,
        public ?string $shipmentWarehouse = null,
        public ?string $operation = null,
    ) {}
}
