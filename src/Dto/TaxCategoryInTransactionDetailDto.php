<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The category that applies to the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInTransactionDetailDtoFactory factory()
 */
class TaxCategoryInTransactionDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
