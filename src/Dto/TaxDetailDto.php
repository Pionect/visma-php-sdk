<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a VAT Detail Line. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailDtoFactory testFactory()
 */
class TaxDetailDto extends Model
{
    public function __construct(
        public ?string $taxId = null,
        public ?int $recordId = null,
        public ?VatIdInTaxDetailDto $vatId = null,
        public int|float|null $vatRate = null,
        public int|float|null $taxableAmount = null,
        public int|float|null $vatAmount = null,
    ) {}
}
