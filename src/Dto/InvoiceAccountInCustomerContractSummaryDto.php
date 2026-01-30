<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Invoice information section &gt; Account &gt; 	The specific account that is to be invoiced for
 * contract services.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceAccountInCustomerContractSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceAccountInCustomerContractSummaryDtoFactory factory()
 */
class InvoiceAccountInCustomerContractSummaryDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
