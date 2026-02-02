<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory testFactory()
 */
class VatCategoryLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $vatId = null,
        public ?string $vendorCd = null,
        public ?string $description = null,
        public ?string $type = null,
        public ?string $calculateOn = null,
        public ?string $cashDiscount = null,
        public ?array $vatRates = null,
    ) {}
}
