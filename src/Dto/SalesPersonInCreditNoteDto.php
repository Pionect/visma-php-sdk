<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCreditNoteDtoFactory testFactory()
 */
class SalesPersonInCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
