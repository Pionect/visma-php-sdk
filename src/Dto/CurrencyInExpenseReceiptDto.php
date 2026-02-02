<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Both tabs &gt; Currency &gt; The currency of the expense receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory testFactory()
 */
class CurrencyInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
