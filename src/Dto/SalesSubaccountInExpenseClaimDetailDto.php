<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales sub. &gt; The corresponding subaccount the system uses to record the amount to charge the
 * customer for. This is applicable only when a customer has been specified.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubaccountInExpenseClaimDetailDtoFactory testFactory()
 */
class SalesSubaccountInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
