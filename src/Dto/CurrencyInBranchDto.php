<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Organisation details tab &gt; Base currency settings (shared) section &gt; This group of
 * elements holds information that is shared among all branches of the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInBranchDtoFactory factory()
 */
class CurrencyInBranchDto extends Model
{
    /** Currency Id. */
    #[Property]
    public ?string $id;

    /** Currency description. */
    #[Property]
    public ?string $description;

    /** Currency symbol. */
    #[Property]
    public ?string $symbol;
}
