<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CompanyTreeInfoDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CompanyTreeInfoDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
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
