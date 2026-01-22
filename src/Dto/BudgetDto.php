<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BudgetDto extends Model
{
    /** Mandatory field: The top part &gt; Financial year* &gt; The financial year of the budget. */
    #[Property]
    public ?string $financialYear;

    /** The budget area &gt; The budget articles pane &gt; Released &gt; A check box that indicates (if selected) that the budget article has been released. */
    #[Property]
    public ?bool $released;

    /** The budget area &gt; The budget articles pane &gt; Released amount &gt; The amount that has been released for this article. */
    #[Property]
    public ?float $releasedAmount;

    #[Property]
    public ?\accountInBudgetDto $account;

    #[Property]
    public ?\subaccountInBudgetDto $subaccount;

    /** Mandatory field: The budget area &gt; The budget articles pane &gt; Description* &gt; A description of the budget article.By default, this column displays the account description. */
    #[Property]
    public ?string $description;

    /** The budget area &gt; The budget articles pane &gt; Amount &gt; The article amount. */
    #[Property]
    public ?float $amount;

    /** The budget area  The budget articles pane &gt; Distributed amount &gt; The amount distributed over the periods. */
    #[Property]
    public ?float $distributedAmount;

    /** The budget area The budget articles pane &gt; Period XX &gt; Amount per period within the financial year. */
    #[Property]
    public ?array $periods;

    /** A system generated date/time not visible in the window. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?\branchNumberInBudgetDto $branchNumber;

    /** The timestamp of the budget article, used for concurrency control. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
