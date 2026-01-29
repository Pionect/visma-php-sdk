<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodDto extends Model
{
    #[Property]
    public ?customerInCustomerPaymentMethodDto $customer;

    #[Property]
    public ?paymentMethodInCustomerPaymentMethodDto $paymentMethod;

    /** The top part &gt; Active &gt; A check box that indicates (if selected) that the selected customer payment method is active (that is, available for recording payments). */
    #[Property]
    public ?bool $active;

    #[Property]
    public ?cashAccountInCustomerPaymentMethodDto $cashAccount;

    /** The top part &gt; Card/account no. &gt; The identifier for the customer's payment method. */
    #[Property]
    public ?string $cardOrAccountNo;

    /** Payment method details tab &gt; The specific elements on this tab depend on the selected payment method, which is defined in the window. */
    #[Property]
    public ?array $paymentMethodDetails;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
