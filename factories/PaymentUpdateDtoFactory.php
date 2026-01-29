<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => ReferenceNumberInPaymentUpdateDtoFactory::new()->make(),
            'type' => TypeInPaymentUpdateDtoFactory::new()->make(),
            'hold' => HoldInPaymentUpdateDtoFactory::new()->make(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => ApplicationPeriodInPaymentUpdateDtoFactory::new()->make(),
            'paymentRef' => PaymentRefInPaymentUpdateDtoFactory::new()->make(),
            'customer' => CustomerInPaymentUpdateDtoFactory::new()->make(),
            'location' => LocationInPaymentUpdateDtoFactory::new()->make(),
            'paymentMethod' => PaymentMethodInPaymentUpdateDtoFactory::new()->make(),
            'cashAccount' => CashAccountInPaymentUpdateDtoFactory::new()->make(),
            'currency' => CurrencyInPaymentUpdateDtoFactory::new()->make(),
            'paymentAmount' => PaymentAmountInPaymentUpdateDtoFactory::new()->make(),
            'invoiceText' => InvoiceTextInPaymentUpdateDtoFactory::new()->make(),
            'branch' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'ordersToApply' => [],
            'financeCharges' => [],
            'paymentLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PaymentUpdateDto::class;
    }
}
