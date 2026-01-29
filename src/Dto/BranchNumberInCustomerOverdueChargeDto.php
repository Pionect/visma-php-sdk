<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; Branch &gt; The branch with which this invoice or memo is associated.
 * The field is available if your company is set up with branches.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerOverdueChargeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerOverdueChargeDtoFactory factory()
 */
class BranchNumberInCustomerOverdueChargeDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
