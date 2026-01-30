<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Stocktake line in StocktakeContoller. Used to update a Stocktake line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StocktakeLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakeLineUpdateDtoFactory factory()
 */
class StocktakeLineUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $physicalQuantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $reasonCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
    ) {}
}
