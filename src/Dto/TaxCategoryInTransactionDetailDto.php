<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The category that applies to the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInTransactionDetailDtoFactory testFactory()
 */
class TaxCategoryInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
