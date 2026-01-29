<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerPaymentMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customer' => CustomerInCustomerPaymentMethodDtoFactory::new()->make(),
            'paymentMethod' => PaymentMethodInCustomerPaymentMethodDtoFactory::new()->make(),
            'active' => $this->faker->boolean(),
            'cashAccount' => CashAccountInCustomerPaymentMethodDtoFactory::new()->make(),
            'cardOrAccountNo' => $this->faker->word(),
            'paymentMethodDetails' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDto::class;
    }
}
