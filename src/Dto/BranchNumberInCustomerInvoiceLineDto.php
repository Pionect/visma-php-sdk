<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerInvoiceLineDtoFactory testFactory()
 */
class BranchNumberInCustomerInvoiceLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
