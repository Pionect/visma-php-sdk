<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales account &gt; The sales account to which the system should record the part of the amount to
 * charge the customer for. This is applicable only when a customer has been specified.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesAccountInExpenseClaimDetailDtoFactory testFactory()
 */
class SalesAccountInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
