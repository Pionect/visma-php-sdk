<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateShipmentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateShipmentActionResultDtoFactory factory()
 */
class CreateShipmentActionResultDto extends Model
{
    #[Property]
    public ?string $referenceNumber;

    #[Property]
    public ?ShipmentDto $shipmentDto;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
