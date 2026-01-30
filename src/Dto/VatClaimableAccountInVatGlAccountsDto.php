<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT Claimable account &gt; The account that accumulates the VAT amounts to be claimed from the tax
 * agency for the VAT reporting period.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatClaimableAccountInVatGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatClaimableAccountInVatGlAccountsDtoFactory factory()
 */
class VatClaimableAccountInVatGlAccountsDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
