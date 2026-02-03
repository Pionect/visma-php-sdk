<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakeV2dtoFactory testFactory()
 */
class StocktakeV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var StocktakeLineV2dto[]|null */
        public ?array $lines = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
