<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Financial details tab &gt; Payment info section &gt; Terms*
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInCashSaleDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCashSaleDtoFactory testFactory()
 */
class CreditTermsInCashSaleDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
