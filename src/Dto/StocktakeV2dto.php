<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StocktakeV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakeV2dtoFactory factory()
 */
class StocktakeV2dto extends Model
{
    public function __construct(
        public ?string $referenceNbr = null,
        public ?string $description = null,
        public ?string $summaryStatus = null,
        public ?\Carbon\Carbon $freezeDate = null,
        public ?int $numberOfLines = null,
        public int|float|null $physicalQty = null,
        public int|float|null $varianceQty = null,
        public int|float|null $varianceCost = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $lines = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
