<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerCreditNoteDtoFactory testFactory()
 */
class SalesPersonInCustomerCreditNoteDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
