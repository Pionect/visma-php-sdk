<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt; Default values section &gt; Default account &gt; The account to be
 * used as one of the sources of possible accounts for the invoices and transactions for the project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefAccountInProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccountInProjectDtoFactory factory()
 */
class DefAccountInProjectDto extends Model
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
