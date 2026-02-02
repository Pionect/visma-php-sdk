<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch is deprecated, please use BranchNumber instead.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInCustomerDocumentDtoFactory testFactory()
 */
class BranchInCustomerDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
