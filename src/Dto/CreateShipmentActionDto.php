<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreateShipmentActionDtoFactory testFactory()
 */
class CreateShipmentActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $orderType = null,
        public ?bool $returnShipmentDto = null,
        public ?\Carbon\Carbon $shipmentDate = null,
        public ?string $shipmentWarehouse = null,
        public ?string $operation = null,
    ) {}
}
