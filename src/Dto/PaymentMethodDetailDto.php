<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PaymentMethodDetailDto extends Model
{
    /** Mandatory field: Table column &gt; ID* &gt; The identifier of the payment method element. */
    #[Property]
    public ?string $detailId;

    /** Table column &gt; Description &gt; The name for the payment method element. */
    #[Property]
    public ?string $description;

    /** Table column &gt; BankingDetailType &gt; The bank account type */
    #[Property]
    public ?string $bankingDetailType;
}
