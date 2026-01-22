<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPobalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPobalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplier' => $this->faker->word(),
            'totalPoonHoldOrderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalPoonHoldLineTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalOpenPoorderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalOpenPolineTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalClosedPoorderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalClosedPolineTotal' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPobalanceDto::class;
    }
}
