<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; Branch &gt; The branch with which this invoice or memo is associated.
 * The field is available if your company is set up with branches.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteDtoFactory factory()
 */
class BranchNumberInCustomerDebitNoteDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
