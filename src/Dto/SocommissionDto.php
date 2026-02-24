<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SocommissionDtoFactory testFactory()
 */
class SocommissionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SocommissionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $salesPersonId = null,
        public int|float|null $commissionPercent = null,
        public int|float|null $commissionAmount = null,
        public int|float|null $commissionableAmount = null,
    ) {}
}
