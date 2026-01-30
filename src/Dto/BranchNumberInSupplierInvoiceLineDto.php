<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Mandatory field: Branch* &gt; The branch that purchases the line item or
 * service.
 * Note: The field type has been changed from string to BranchNumberDto, please consider
 * doing changes accordingly.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInSupplierInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInSupplierInvoiceLineDtoFactory factory()
 */
class BranchNumberInSupplierInvoiceLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
