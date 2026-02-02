<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Contract management &gt; Salesperson &gt; The salesperson associated with the contract.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerContractSummaryDtoFactory testFactory()
 */
class SalesPersonInCustomerContractSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
