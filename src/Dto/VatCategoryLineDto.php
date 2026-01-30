<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory factory()
 */
class VatCategoryLineDto extends Model
{
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
