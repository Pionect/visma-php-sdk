<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UnitOfMeasureDtoFactory testFactory()
 */
class UnitOfMeasureDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $fromUnit = null,
        public ?string $toUnit = null,
        public ?string $unitMultDiv = null,
        public int|float|null $unitRate = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
