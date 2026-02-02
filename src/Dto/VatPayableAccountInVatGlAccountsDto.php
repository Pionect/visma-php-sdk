<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: VAT payable account* &gt; The liability account that accumulates the VAT amounts to
 * be paid to a tax agency for the VAT reporting period.
 *
 * @method static \Pionect\VismaSdk\Factories\VatPayableAccountInVatGlAccountsDtoFactory testFactory()
 */
class VatPayableAccountInVatGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
