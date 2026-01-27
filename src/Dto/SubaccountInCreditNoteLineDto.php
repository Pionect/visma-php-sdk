<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Subaccount* &gt; The corresponding subaccount used for this transaction.
 */
class SubaccountInCreditNoteLineDto extends Model
{
    /** Mandatory field: Subaccount* &gt; The subaccount number. Format 9-XX. */
    #[Property]
    public ?string $subaccountNumber;

    /** SubID &gt; The  identifier of the subaccount. */
    #[Property]
    public ?int $subaccountId;

    /** Description &gt; The description of the identifier. */
    #[Property]
    public ?string $description;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Active &gt; The status of the identifier. */
    #[Property]
    public ?bool $active;

    /** Segments are entities that you use to define the structure of IDs for the subaccount.  This information is collected from window CS202000. */
    #[Property]
    public ?array $segments;

    /** The timestamp of the subaccount, used for concurrency control. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
