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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DebtCollectionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Debt Collection Case Number */
        public ?string $caseNumber = null,
        /** Debt Collection Case Number */
        public ?string $caseType = null,
        /** Debt Collection Case Number */
        public ?string $caseStatus = null,
        /** Debt Collection Case Number */
        public ?string $caseUrl = null,
    ) {}
}
