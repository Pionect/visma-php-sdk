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
            'contractTemplate' => null,
            'status' => $this->faker->word(),
            'customer' => null,
            'location' => null,
            'description' => $this->faker->sentence(),
            'balance' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'summary' => null,
            'details' => null,
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDto::class;
    }
}
