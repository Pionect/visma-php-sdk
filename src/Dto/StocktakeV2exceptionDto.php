<?php

namespace Pionect\VismaSdk\Dto;

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
        public ?string $message = null,
        public ?string $errorCode = null,
    ) {}
}
