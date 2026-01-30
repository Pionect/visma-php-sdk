<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Debt Collection information for an invoice
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebtCollectionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebtCollectionDtoFactory testFactory()
 */
class DebtCollectionDto extends Model
{
    public function __construct(
        public ?string $caseNumber = null,
        public ?string $caseType = null,
        public ?string $caseStatus = null,
        public ?string $caseUrl = null,
    ) {}
}
