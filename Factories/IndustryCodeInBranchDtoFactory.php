<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IndustryCodeInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\IndustryCodeInBranchDto>
 */
class IndustryCodeInBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return IndustryCodeInBranchDto::class;
    }
}
