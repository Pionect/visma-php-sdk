<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateShipmentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateShipmentActionResultDtoFactory testFactory()
 */
class CreateShipmentActionResultDto extends Model
{
    public function __construct(
        public ?string $referenceNumber = null,
        public ?ShipmentDto $shipmentDto = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
