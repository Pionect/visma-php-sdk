<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Both tabs &gt; Currency &gt; The currency of the expense receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory testFactory()
 */
class CurrencyInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
