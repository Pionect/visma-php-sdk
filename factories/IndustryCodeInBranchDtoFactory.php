<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IndustryCodeInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IndustryCodeInBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return IndustryCodeInBranchDto::class;
    }
}
