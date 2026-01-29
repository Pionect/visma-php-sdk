<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The field is deprecated for customer document endpoints, please use Salesperson instead
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonIdinCustomerCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonIdinCustomerCreditNoteUpdateDtoFactory factory()
 */
class SalesPersonIdinCustomerCreditNoteUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
