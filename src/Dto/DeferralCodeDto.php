<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DeferralCodeDto extends Model
{
    /** Mandatory field: Deferral code* &gt; 	The unique code for the deferral type. */
    #[Property]
    public ?string $deferralCode;

    /** Description &gt; The description of the deferral code. */
    #[Property]
    public ?string $description;

    /** Deferred revenue from item &gt; When this check box is selected, the deferred revenue of the code will be retrieved from the connected item. */
    #[Property]
    public ?bool $deferredRevenueFromItem;

    /** Recognition method &gt; The method used to distribute the document amount over the periods. */
    #[Property]
    public ?string $recognitionMethod;

    /** Code type &gt; The type of the deferral code. */
    #[Property]
    public ?string $codeType;

    #[Property]
    public ?deferralAccountInDeferralCodeDto $deferralAccount;

    #[Property]
    public ?deferralSubInDeferralCodeDto $deferralSub;

    #[Property]
    public ?string $errorInfo;
}
