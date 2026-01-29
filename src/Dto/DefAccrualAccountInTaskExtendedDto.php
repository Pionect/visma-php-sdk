<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt; Default values section &gt; Accrual account &gt; The default
 * accrual account to be used in project transactions for the project task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefAccrualAccountInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccrualAccountInTaskExtendedDtoFactory factory()
 */
class DefAccrualAccountInTaskExtendedDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
