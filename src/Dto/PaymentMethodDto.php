<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PaymentMethodMeansOfPaymentEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Payment Method in PaymentMethodController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodDtoFactory testFactory()
 */
class PaymentMethodDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PaymentMethodDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Payment method ID* > The unique identifier of
         * the payment method.
         */
        #[MapName('paymentMethodID')]
        public ?string $paymentMethodId = null,
        /**
         * The top part > Active > A check box that indicates whether the payment method
         * is active in the system.
         */
        public ?bool $active = null,
        /**
         * The top part > Means of payment > One of the system's built-in payment
         * templates. The following options are available: Credit card, Cash, Direct
         * deposit.
         */
        public ?PaymentMethodMeansOfPaymentEnum $meansOfPayment = null,
        /**
         * Mandatory field: The top part > Description* > A description of the payment
         * method.
         */
        public ?string $description = null,
        /**
         * The top part > Use for supplier > A check box that indicates whether the
         * payment method will be used in Supplier ledger.
         */
        #[MapName('useInAP')]
        public ?bool $useInAp = null,
        /**
         * @var PaymentMethodDetailDto[]|null
         *                                    The settings for Customer ledger and The settings of Supplier ledger tab >
         *                                    The table
         */
        public ?array $details = null,
    ) {}
}
