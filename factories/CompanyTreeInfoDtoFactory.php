<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CompanyTreeInfoDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CompanyTreeInfoDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'active' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'workGroupId' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CompanyTreeInfoDto::class;
    }
}
