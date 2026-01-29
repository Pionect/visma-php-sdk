<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt; Default values section &gt; Default subaccount* &gt; The subaccount
 * to be used as one of the sources of possible segment values for subaccounts to be used in the
 * invoices and transactions for the project task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefSubInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefSubInTaskExtendedDtoFactory factory()
 */
class DefSubInTaskExtendedDto extends Model
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
