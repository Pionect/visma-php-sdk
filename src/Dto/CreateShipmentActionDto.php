<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreateShipmentActionDtoFactory testFactory()
 */
class CreateShipmentActionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CreateShipmentActionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field */
        public ?string $orderType = null,
        public ?bool $returnShipmentDto = null,
        /** Mandatory field */
        public ?\Carbon\Carbon $shipmentDate = null,
        /** Mandatory field */
        public ?string $shipmentWarehouse = null,
        /**
         * Operation Type. Possible values: I or R, I = Issue, R = Receipt. If not set
         * it will take the default one defined on Order Type.
         */
        public ?string $operation = null,
    ) {}
}
