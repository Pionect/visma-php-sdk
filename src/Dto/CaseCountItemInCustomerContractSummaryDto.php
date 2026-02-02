<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Contract management section &gt; Case count item &gt; A non-stock item used for counting cases
 * associated with the contract.
 *
 * @method static \Pionect\VismaSdk\Factories\CaseCountItemInCustomerContractSummaryDtoFactory testFactory()
 */
class CaseCountItemInCustomerContractSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
