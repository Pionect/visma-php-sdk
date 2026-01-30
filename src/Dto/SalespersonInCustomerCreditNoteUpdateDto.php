<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $value = null,
    ) {}
}
