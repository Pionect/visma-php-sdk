<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StocktakeV2exceptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakeV2exceptionDtoFactory factory()
 */
class StocktakeV2exceptionDto extends Model
{
    #[Property]
    public ?string $inventoryId;

    #[Property]
    public ?string $locationId;

    #[Property]
    public ?float $physicalQuantity;

    #[Property]
    public ?string $reasonCode;

    #[Property]
    public ?string $lotSerialNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Exception message */
    #[Property]
    public ?string $message;

    /** Exception error code */
    #[Property]
    public ?string $errorCode;
}
