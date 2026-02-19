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
        /** Mandatory field: The top part > Financial year* > The financial year. */
        public ?int $year = null,
        /** Period > The period no and the year. */
        public ?string $period = null,
        /** Start date > The date when the financial period starts. */
        public ?\Carbon\Carbon $startDate = null,
        /** End date > The date when the financial period ends. */
        public ?\Carbon\Carbon $endDate = null,
        /**
         * Description > The description of the financial period (such as the name of
         * the month or the number of the quarter).
         */
        public ?string $description = null,
        /**
         * Active > A check box that indicates (if selected) that the period can be used
         * for posting transactions.
         */
        public ?bool $active = null,
        /**
         * Closed in Supplier ledger > A read-only check box that indicates (if
         * selected) that the financial period is closed in the Supplier ledger
         * workspace; if this check box is cleared, the period is active in the this
         * workspace.
         */
        public ?bool $closedInSupplierLedger = null,
        /**
         * Closed in Customer ledger > A read-only check box that indicates (if
         * selected) that the financial period is closed in the Customer ledger
         * workspace; if this check box is cleared, the period is active in this
         * workspace.
         */
        public ?bool $closedInCustomerLedger = null,
        /**
         * Closed in Inventory management > Inventory management	A read-only check box
         * that indicates (if selected) that the financial period is closed in the
         * Inventory workspace; if this check box is cleared, the period is active in
         * the workspace.
         */
        public ?bool $closedInInventoryManagement = null,
        /**
         * Closed in General ledger > A read-only check box that indicates (if selected)
         * that the financial period is closed in the General ledger workspace; if this
         * check box is cleared, the period is active in the this workspace.
         */
        public ?bool $closedInGeneralLedger = null,
        /**
         * Closed in Cash management > A read-only check box that indicates (if
         * selected) that the financial period is closed in the Cash management; if this
         * check box is cleared, the period is active in this workspace.
         */
        public ?bool $closedInCashManagement = null,
        /**
         * Closed in Fixed assets > A read-only check box that indicates (if selected)
         * that the financial period is closed in the Fixed assets workspace; if this
         * check box is cleared, the period is active in the this workspace.
         */
        public ?bool $closedInFixedAssets = null,
    ) {}
}
