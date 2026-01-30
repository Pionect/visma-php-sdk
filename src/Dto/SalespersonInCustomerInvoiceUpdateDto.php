<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalespersonInCustomerInvoiceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalespersonInCustomerInvoiceUpdateDtoFactory factory()
 */
class SalespersonInCustomerInvoiceUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
