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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
