<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Ledger
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInExtendedOrganizationDtoFactory testFactory()
 */
class LedgerInExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
