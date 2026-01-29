<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Financial Period in FinancialPeriodController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodDtoFactory factory()
 */
class FinancialPeriodDto extends Model
{
    /** Mandatory field: The top part &gt; Financial year* &gt; The financial year. */
    #[Property]
    public ?int $year;

    /** The table &gt; Period &gt; The period no and the year. */
    #[Property]
    public ?string $period;

    /** The table &gt; Start date &gt; The date when the financial period starts. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** The table &gt; End date &gt; The date when the financial period ends. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    /** The table &gt; Description &gt; The description of the financial period (such as the name of the month or the number of the quarter). */
    #[Property]
    public ?string $description;

    /** The table &gt; Active &gt; A check box that indicates (if selected) that the period can be used for posting transactions. */
    #[Property]
    public ?bool $active;

    /** The table &gt; Closed in Supplier ledger &gt; A read-only check box that indicates (if selected) that the financial period is closed in the Supplier ledger workspace; if this check box is cleared, the period is active in the this workspace. */
    #[Property]
    public ?bool $closedInSupplierLedger;

    /** The table &gt; Closed in Customer ledger &gt; A read-only check box that indicates (if selected) that the financial period is closed in the Customer ledger workspace; if this check box is cleared, the period is active in this workspace. */
    #[Property]
    public ?bool $closedInCustomerLedger;

    /** The table &gt; Closed in Inventory management &gt; Inventory management	A read-only check box that indicates (if selected) that the financial period is closed in the Inventory workspace; if this check box is cleared, the period is active in the workspace. */
    #[Property]
    public ?bool $closedInInventoryManagement;

    /** The table &gt; Closed in General ledger &gt; A read-only check box that indicates (if selected) that the financial period is closed in the General ledger workspace; if this check box is cleared, the period is active in the this workspace. */
    #[Property]
    public ?bool $closedInGeneralLedger;

    /** The table &gt; Closed in Cash management &gt; A read-only check box that indicates (if selected) that the financial period is closed in the Cash management; if this check box is cleared, the period is active in this workspace. */
    #[Property]
    public ?bool $closedInCashManagement;

    /** The table &gt; Closed in Fixed assets &gt; A read-only check box that indicates (if selected) that the financial period is closed in the Fixed assets workspace; if this check box is cleared, the period is active in the this workspace. */
    #[Property]
    public ?bool $closedInFixedAssets;
}
