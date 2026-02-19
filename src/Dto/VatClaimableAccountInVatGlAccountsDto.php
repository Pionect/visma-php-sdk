<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
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
        /** Account > The account number. */
        public ?AccountTypeEnum $type = null,
        /** Account class > The identifier of the account class. */
        public ?string $externalCode1 = null,
        /** Account class > The name of the account class. */
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
