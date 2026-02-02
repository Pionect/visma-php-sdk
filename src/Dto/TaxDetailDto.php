<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a VAT Detail Line. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailDtoFactory testFactory()
 */
class TaxDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $taxId = null,
        public ?int $recordId = null,
        public ?VatIdInTaxDetailDto $vatId = null,
        public int|float|null $vatRate = null,
        public int|float|null $taxableAmount = null,
        public int|float|null $vatAmount = null,
    ) {}
}
