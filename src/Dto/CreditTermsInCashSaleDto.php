<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Financial details tab &gt; Payment info section &gt; Terms*
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInCashSaleDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCashSaleDtoFactory factory()
 */
class CreditTermsInCashSaleDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
