<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contractId' => $this->faker->uuid(),
            'contractTemplate' => $this->faker->word(),
            'status' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'summary' => $this->faker->word(),
            'details' => $this->faker->word(),
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDto::class;
    }
}
