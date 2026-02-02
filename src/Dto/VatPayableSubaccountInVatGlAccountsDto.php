<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: VAT payable subaccount* &gt; The corresponding VAT payable subaccount.
 *
 * @method static \Pionect\VismaSdk\Factories\VatPayableSubaccountInVatGlAccountsDtoFactory testFactory()
 */
class VatPayableSubaccountInVatGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
