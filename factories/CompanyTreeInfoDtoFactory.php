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
            'active' => $this->faker->boolean(),
            'owner' => $this->faker->boolean(),
            'workGroupId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return CompanyTreeInfoDto::class;
    }
}
