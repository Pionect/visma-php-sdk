<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales sub. &gt; The corresponding subaccount the system uses to record the amount to charge the
 * customer for. This is applicable only when a customer has been specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesSubaccountInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubaccountInExpenseClaimDetailDtoFactory factory()
 */
class SalesSubaccountInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
