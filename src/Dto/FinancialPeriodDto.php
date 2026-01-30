<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Financial Period in FinancialPeriodController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodDtoFactory testFactory()
 */
class FinancialPeriodDto extends Model
{
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
