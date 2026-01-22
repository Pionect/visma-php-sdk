<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ExpenseReceiptQueryParameters extends Model
{
    /** The date of the document */
    #[Property]
    public ?string $date;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dateCondition;

    /** Identifies the inventory item from the document */
    #[Property]
    public ?string $inventory;

    /** Identifies the project from the document */
    #[Property]
    public ?string $project;

    /** Identifies the employee from the document */
    #[Property]
    public ?string $claimedBy;

    /** Filter on Task ID. */
    #[Property]
    public ?string $projectTask;

    /** If the document is invoiceable */
    #[Property]
    public ?bool $invoiceable;

    /** The status of the document. */
    #[Property]
    public ?string $status;

    /** Identifies the customer from the document */
    #[Property]
    public ?string $customer;
}
