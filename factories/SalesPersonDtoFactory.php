<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesPersonDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salespersonId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'isActive' => $this->faker->boolean(),
            'commissionPct' => $this->faker->randomFloat(2, 0, 1000),
            'salesSub' => SubAccountDescriptionDtoFactory::new()->make(),
            'customers' => [],
            'commissionHistory' => [],
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonDto::class;
    }
}
