<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteLineDtoFactory testFactory()
 */
class BranchNumberInCustomerDebitNoteLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
