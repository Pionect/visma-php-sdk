<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General ledger accounts tab &gt; Default values section &gt; Default subaccount*
 * &gt; The subaccount to be used as one of the sources of possible segment values for subaccounts to
 * be used in the invoices and transactions for the project.
 *
 * @method static \Pionect\VismaSdk\Factories\DefSubInProjectDtoFactory testFactory()
 */
class DefSubInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
