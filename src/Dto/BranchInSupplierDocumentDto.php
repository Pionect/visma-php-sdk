<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch is deprecated, please use BranchNumber instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInSupplierDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInSupplierDocumentDtoFactory testFactory()
 */
class BranchInSupplierDocumentDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
