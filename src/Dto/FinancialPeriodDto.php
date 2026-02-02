<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Financial Period in FinancialPeriodController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodDtoFactory testFactory()
 */
class FinancialPeriodDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $year = null,
        public ?string $period = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?bool $closedInSupplierLedger = null,
        public ?bool $closedInCustomerLedger = null,
        public ?bool $closedInInventoryManagement = null,
        public ?bool $closedInGeneralLedger = null,
        public ?bool $closedInCashManagement = null,
        public ?bool $closedInFixedAssets = null,
    ) {}
}
