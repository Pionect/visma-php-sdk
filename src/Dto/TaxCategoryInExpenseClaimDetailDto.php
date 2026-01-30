<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The VAT category associated with the expense item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInExpenseClaimDetailDtoFactory factory()
 */
class TaxCategoryInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
