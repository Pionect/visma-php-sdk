<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT Claimable account &gt; The account that accumulates the VAT amounts to be claimed from the tax
 * agency for the VAT reporting period.
 *
 * @method static \Pionect\VismaSdk\Factories\VatClaimableAccountInVatGlAccountsDtoFactory testFactory()
 */
class VatClaimableAccountInVatGlAccountsDto extends SpatieData
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
