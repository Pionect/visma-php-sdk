<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\StocktakeV2exceptionErrorCodeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakeV2exceptionDtoFactory testFactory()
 */
class StocktakeV2exceptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $inventoryId = null,
        public ?string $locationId = null,
        public int|float|null $physicalQuantity = null,
        public ?string $reasonCode = null,
        public ?string $lotSerialNumber = null,
        public ?\Carbon\Carbon $expirationDate = null,
        /** Exception message */
        public ?string $message = null,
        /** Exception error code */
        public ?StocktakeV2exceptionErrorCodeEnum $errorCode = null,
    ) {}
}
