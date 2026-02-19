<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerOverdueChargeLineDtoFactory testFactory()
 */
class BranchNumberInCustomerOverdueChargeLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
