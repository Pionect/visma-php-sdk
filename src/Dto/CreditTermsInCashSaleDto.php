<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The Financial details tab &gt; Payment info section &gt; Terms*
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCashSaleDtoFactory testFactory()
 */
class CreditTermsInCashSaleDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
