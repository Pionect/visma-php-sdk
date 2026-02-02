<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Debt Collection information for an invoice
 *
 * @method static \Pionect\VismaSdk\Factories\DebtCollectionDtoFactory testFactory()
 */
class DebtCollectionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $caseNumber = null,
        public ?string $caseType = null,
        public ?string $caseStatus = null,
        public ?string $caseUrl = null,
    ) {}
}
