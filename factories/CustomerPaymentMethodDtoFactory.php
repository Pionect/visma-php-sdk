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
            'customer' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'cashAccount' => $this->faker->word(),
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
