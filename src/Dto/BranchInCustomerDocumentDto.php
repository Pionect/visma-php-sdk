<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch is deprecated, please use BranchNumber instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInCustomerDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInCustomerDocumentDtoFactory testFactory()
 */
class BranchInCustomerDocumentDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
