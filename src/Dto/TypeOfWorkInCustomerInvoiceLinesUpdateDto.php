<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete. Please define typeOfWork on the item level instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeOfWorkInCustomerInvoiceLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeOfWorkInCustomerInvoiceLinesUpdateDtoFactory factory()
 */
class TypeOfWorkInCustomerInvoiceLinesUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
