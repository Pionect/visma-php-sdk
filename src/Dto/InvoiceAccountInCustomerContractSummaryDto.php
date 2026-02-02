<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Invoice information section &gt; Account &gt; 	The specific account that is to be invoiced for
 * contract services.
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceAccountInCustomerContractSummaryDtoFactory testFactory()
 */
class InvoiceAccountInCustomerContractSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
