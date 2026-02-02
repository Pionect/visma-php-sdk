<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Branch* &gt; The branch that sells the line item or provides the service.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCreditNoteLineDtoFactory testFactory()
 */
class BranchNumberInCreditNoteLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
