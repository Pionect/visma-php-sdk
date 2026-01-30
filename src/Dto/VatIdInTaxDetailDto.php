<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT ID &gt; The ID of the specific VAT applied.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatIdInTaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatIdInTaxDetailDtoFactory factory()
 */
class VatIdInTaxDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
