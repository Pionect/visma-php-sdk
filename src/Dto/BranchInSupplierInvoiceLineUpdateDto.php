<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch is deprecated, please use BranchNumber instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInSupplierInvoiceLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInSupplierInvoiceLineUpdateDtoFactory factory()
 */
class BranchInSupplierInvoiceLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
