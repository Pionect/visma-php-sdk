<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Both tabs &gt; Currency &gt; The currency of the expense receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInExpenseReceiptDtoFactory factory()
 */
class CurrencyInExpenseReceiptDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
