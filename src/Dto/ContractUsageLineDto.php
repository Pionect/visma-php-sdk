<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ContractUsageLineDto extends Model
{
    #[Property]
    public ?int $transactionNumber;

    /** Information indicating that the contract is collected from the Transaction history tab and the contract is invoiced. Not indicated on screen CT303000. */
    #[Property]
    public ?bool $billed;

    #[Property]
    public ?branchInContractUsageLineDto $branch;

    #[Property]
    public ?itemInContractUsageLineDto $item;

    /** Both tabs &gt; Description &gt; A description of the non-stock item. */
    #[Property]
    public ?string $description;

    /** Both tabs &gt; UoM &gt; The unit of measure used for the item. */
    #[Property]
    public ?string $uom;

    /** Both tabs &gt; Quantity &gt; A number of units used for the item. */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: Both tabs &gt; Date* &gt; The date of the activity, case, applied labour, or other usage (for the item). */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Transaction history tab &gt; Type &gt; The type of the customer ledger document. */
    #[Property]
    public ?string $type;

    /** Transaction history tab &gt; Ref. no. &gt; The reference number of the document/invoice. */
    #[Property]
    public ?string $referenceNbr;

    /** Transaction history tab &gt; Invoicing date &gt; The date when the invoice was issued. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $billingDate;

    /** A system generated date/time that indicates the last change for the document. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
