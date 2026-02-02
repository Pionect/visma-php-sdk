<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The VAT category associated with the expense item.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInExpenseClaimDetailDtoFactory testFactory()
 */
class TaxCategoryInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
