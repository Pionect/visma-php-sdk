<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sub. ID &gt; The subaccount used to record the purchased non-stock item that does not require
 * receipt (by default, the subaccount generated in accordance with the rule defined in the Combine
 * COGS/expense sub. from field in the Posting classes (IN206000) window).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubInPurchaseOrderLineDtoFactory factory()
 */
class SubInPurchaseOrderLineDto extends Model
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
