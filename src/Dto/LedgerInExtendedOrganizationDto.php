<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Ledger
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInExtendedOrganizationDtoFactory factory()
 */
class LedgerInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
