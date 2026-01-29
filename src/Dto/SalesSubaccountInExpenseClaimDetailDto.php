<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
