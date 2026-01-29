<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class FinancialsDetailDto extends Model
{
    /** Link to general ledger section &gt; Batch number &gt; The number of the batch generated to implement the cash transaction. */
    #[Property]
    public ?string $batchNumber;

    #[Property]
    public ?branchInFinancialsDetailDto $branch;

    /** Link to general ledger section &gt; Cleared &gt; A check box that indicates (if selected) that the transaction was cleared. */
    #[Property]
    public ?bool $cleared;

    /** Link to general ledger section &gt; Clear date &gt; 	The date when the transaction was cleared. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $clearDate;

    #[Property]
    public ?taxZoneInFinancialsDetailDto $taxZone;

    /** VAT settings section &gt; VAT calculation &gt; The VAT calculation mode, which defines which amounts (VAT-inclusive or VAT-exclusive) should be entered in the detail lines of a document. */
    #[Property]
    public ?string $taxCalcMode;
}
