<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\OrderToApplyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderToApplyDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNo' => $this->faker->word(),
            'status' => $this->faker->word(),
            'appliedToOrder' => $this->faker->randomFloat(2, 0, 1000),
            'transferredToInvoice' => $this->faker->randomFloat(2, 0, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->sentence(),
            'orderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'invoiceNbr' => $this->faker->word(),
            'invoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return OrderToApplyDto::class;
    }
}
