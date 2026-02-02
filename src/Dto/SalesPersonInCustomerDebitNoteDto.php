<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerDebitNoteDtoFactory testFactory()
 */
class SalesPersonInCustomerDebitNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
