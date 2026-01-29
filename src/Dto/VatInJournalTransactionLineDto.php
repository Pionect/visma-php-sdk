<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT ID &gt; The VAT used to calculate the VAT amount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatInJournalTransactionLineDtoFactory factory()
 */
class VatInJournalTransactionLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
