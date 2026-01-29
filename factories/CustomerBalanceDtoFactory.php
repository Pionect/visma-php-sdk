<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customer' => CustomerDescriptionDtoFactory::new()->make(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'totalOrder' => $this->faker->randomFloat(2, 0, 1000),
            'totalLoan' => $this->faker->randomFloat(2, 0, 1000),
            'totalSalePeriod' => $this->faker->randomFloat(2, 0, 1000),
            'totalSaleYear' => $this->faker->randomFloat(2, 0, 1000),
            'totalDiscountPeriod' => $this->faker->randomFloat(2, 0, 1000),
            'totalDiscountYear' => $this->faker->randomFloat(2, 0, 1000),
            'lastModified' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerBalanceDto::class;
    }
}
