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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DefSubInProjectDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
