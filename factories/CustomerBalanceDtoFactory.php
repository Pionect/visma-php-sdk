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
            'balance' => null,
            'totalOrder' => null,
            'totalLoan' => null,
            'totalSalePeriod' => null,
            'totalSaleYear' => null,
            'totalDiscountPeriod' => null,
            'totalDiscountYear' => null,
            'lastModified' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerBalanceDto::class;
    }
}
