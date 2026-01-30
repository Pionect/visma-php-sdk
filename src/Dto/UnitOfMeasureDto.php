<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UnitOfMeasureDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UnitOfMeasureDtoFactory testFactory()
 */
class UnitOfMeasureDto extends Model
{
    public function __construct(
        public ?string $fromUnit = null,
        public ?string $toUnit = null,
        public ?string $unitMultDiv = null,
        public int|float|null $unitRate = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
