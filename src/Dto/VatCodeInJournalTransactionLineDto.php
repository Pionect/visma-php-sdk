<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT code &gt; The VAT code based on which the taxable amount is calculated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInJournalTransactionLineDtoFactory factory()
 */
class VatCodeInJournalTransactionLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
