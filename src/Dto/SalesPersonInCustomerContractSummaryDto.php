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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
