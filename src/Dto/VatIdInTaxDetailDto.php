<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT ID &gt; The ID of the specific VAT applied.
 *
 * @method static \Pionect\VismaSdk\Factories\VatIdInTaxDetailDtoFactory testFactory()
 */
class VatIdInTaxDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
