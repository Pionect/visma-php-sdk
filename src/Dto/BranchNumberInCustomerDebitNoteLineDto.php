<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerDebitNoteLineDtoFactory factory()
 */
class BranchNumberInCustomerDebitNoteLineDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
