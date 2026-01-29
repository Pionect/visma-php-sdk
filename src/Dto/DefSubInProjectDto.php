<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General ledger accounts tab &gt; Default values section &gt; Default subaccount*
 * &gt; The subaccount to be used as one of the sources of possible segment values for subaccounts to
 * be used in the invoices and transactions for the project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefSubInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefSubInProjectDtoFactory factory()
 */
class DefSubInProjectDto extends Model
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
