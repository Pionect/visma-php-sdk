<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDtoFactory testFactory()
 */
class CustomerPaymentMethodDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CustomerInCustomerPaymentMethodDto $customer = null,
        public ?PaymentMethodInCustomerPaymentMethodDto $paymentMethod = null,
        /**
         * The top part > Active > A check box that indicates (if selected) that the
         * selected customer payment method is active (that is, available for recording
         * payments).
         */
        public ?bool $active = null,
        public ?CashAccountInCustomerPaymentMethodDto $cashAccount = null,
        /**
         * The top part > Card/account no. > The identifier for the customer's payment
         * method.
         */
        public ?string $cardOrAccountNo = null,
        /**
         * @var CustomerPaymentMethodDetailDto[]|null
         *                                            Payment method details tab > The specific elements on this tab depend on the
         *                                            selected payment method, which is defined in the window.
         */
        public ?array $paymentMethodDetails = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
