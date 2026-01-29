<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalespersonInCustomerCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalespersonInCustomerCreditNoteUpdateDtoFactory factory()
 */
class SalespersonInCustomerCreditNoteUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
